@extends('admin.layout.master')
@section('content')
<div class="card row justify-content-center">
    <div class='card-header row justify-content-between'>
        <h5 class="col-3 card-title m-4">الخدمات</h5>
        <button class="col-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">اضافة خدمة</button>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>الاسم</th>
                  <th>المحتوي</th>
                  <th>الصورة</th>
                  <th>اجراء</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach($services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td> {{ $service->content }} </td>
                    <td><img src="{{ url('storage').'/'.$service->image }}" width="100px" height="100px" alt=""></td>
                    <td>
                        <a href="{{ route('admin.service.destroy',$service->id) }}" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">اضافة خدمة</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('admin.service.store') }}" enctype="multipart/form-data">
            @csrf

        <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">اسم الخدمة:</label>
              <input type="text" name="name" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">المحتوي:</label>
                <textarea name="content" class="form-control" id="message-text"></textarea>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">الصورة:</label>
                <input type="file" name="image" class="form-control" id="message-text">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
          <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
    </form>

      </div>
    </div>
  </div>

@endsection
