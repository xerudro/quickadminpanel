<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCrmDocumentRequest;
use App\Http\Requests\StoreCrmDocumentRequest;
use App\Http\Requests\UpdateCrmDocumentRequest;
use App\Models\CrmCustomer;
use App\Models\CrmDocument;
use App\Models\Team;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CrmDocumentController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('crm_document_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crmDocuments = CrmDocument::with(['customer', 'team', 'media'])->get();

        $crm_customers = CrmCustomer::get();

        $teams = Team::get();

        return view('frontend.crmDocuments.index', compact('crmDocuments', 'crm_customers', 'teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('crm_document_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = CrmCustomer::pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.crmDocuments.create', compact('customers'));
    }

    public function store(StoreCrmDocumentRequest $request)
    {
        $crmDocument = CrmDocument::create($request->all());

        foreach ($request->input('document_file', []) as $file) {
            $crmDocument->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('document_file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $crmDocument->id]);
        }

        return redirect()->route('frontend.crm-documents.index');
    }

    public function edit(CrmDocument $crmDocument)
    {
        abort_if(Gate::denies('crm_document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = CrmCustomer::pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $crmDocument->load('customer', 'team');

        return view('frontend.crmDocuments.edit', compact('crmDocument', 'customers'));
    }

    public function update(UpdateCrmDocumentRequest $request, CrmDocument $crmDocument)
    {
        $crmDocument->update($request->all());

        if (count($crmDocument->document_file) > 0) {
            foreach ($crmDocument->document_file as $media) {
                if (!in_array($media->file_name, $request->input('document_file', []))) {
                    $media->delete();
                }
            }
        }
        $media = $crmDocument->document_file->pluck('file_name')->toArray();
        foreach ($request->input('document_file', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $crmDocument->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('document_file');
            }
        }

        return redirect()->route('frontend.crm-documents.index');
    }

    public function show(CrmDocument $crmDocument)
    {
        abort_if(Gate::denies('crm_document_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crmDocument->load('customer', 'team');

        return view('frontend.crmDocuments.show', compact('crmDocument'));
    }

    public function destroy(CrmDocument $crmDocument)
    {
        abort_if(Gate::denies('crm_document_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crmDocument->delete();

        return back();
    }

    public function massDestroy(MassDestroyCrmDocumentRequest $request)
    {
        CrmDocument::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('crm_document_create') && Gate::denies('crm_document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new CrmDocument();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
