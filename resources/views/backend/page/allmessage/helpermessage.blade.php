@extends('backend.layouts.master')
@section('backend-content')
                    <div class="dt-page__header">
                        <h1 class="dt-page__title">হেল্পারের কাছে  বার্তা বা মেসেজ পাঠান<span><a href="{{route('helperinfo')}}" class="btn btn-info btn-lg float-right">মেসেজের তালিকা  দেখুন </a></span></h1>
                        <hr>
                    </div>
                    <div class="element-box-tp">
                        <!--------------------
                  START - Controls Above Table
                  -------------------->
                            <div class="row">
                                <div class="col-md-12">
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                       @endif
                                    <form action="{{ route('helpermsgsend') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="message"> বার্তা বা মেসেজ :</label>
                                            <textarea name="message" id="" cols="" rows="6" class="form-control" placeholder="Type Your Message"></textarea>
                                    
                                        </div>
                                        <input type="submit" value="মেসেজ পাঠান " class="btn btn-success">
                                </div>
                                <div class="col-sm-6">
                                   
                                </div>
                                {{-- <div class="col-sm-12">
                                    <form class="form-inline justify-content-sm-end">
                                        <input class="form-control form-control-sm rounded bright" placeholder="Search" type="text">
                                    </form>
                                </div> --}}
                            </div>
                      
                        <!--------------------
                  END - Controls Above Table
                  ------------------          -->
                        <!--------------------
                  START - Table with actions
                  ------------------  -->
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped text-center">
                                <thead class="bg-dark">
                                    <tr>
                                        <th class="text-center">
                                            <input type="checkbox" onclick="toggle(this);">
                                        </th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($helper as $item)
                
                                            <tr class="text-center">
                                                <td class="">
                                                    <input type="checkbox" class="check" name="send[]" value="{{ $item->phone }}">
                                                </td>
                                                <td>
                                                        {{ $item->name }}
                                                </td>
                                                <td> 
                                                        {{ $item->phone }}
                                                </td>
                                             </tr>
                                    
                                    @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </form>
                        <!--------------------
                  END - Table with actions
                  ------------------            -->
                    </div>
                
            
        
    

@endsection
<script>
function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>