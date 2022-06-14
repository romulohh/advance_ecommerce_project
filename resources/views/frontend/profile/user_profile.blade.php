@extends('frontend.main_master')
@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2"><br>
                <img class="card-img-top" style="border-radius: 50%" src="{{ (!empty($user->profile_photo_path)) ? 
                    url('upload/user_images/'.$user->profile_photo_path) :
                    url('upload/no_image.jpg') }}" height="100%" width="100%"><br><br>
                <ul class="list-group list-group-flush">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="{{ route('change.password') }}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Louout</a>
                </ul>
            </div> {{--  end col --}}
            <div class="col-md-2">

            </div> {{--  end col --}}
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center"><span class="text-danger">Hi...</span><strong>{{ Auth::user()->name }}</strong> Update youe Profile</h3>
                    <div class="card body">
                        <form method="post" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail2">Name <span></span></label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $user->name}}">
                              </div>
                              <div class="form-group">
                                <label class="info-title" for="exampleInputEmail2">Email <span></span></label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ $user->email}}">
                              </div>
                              <div class="form-group">
                                <label class="info-title" for="exampleInputEmail2">Phone <span></span></label>
                                <input type="text" id="phone" name="phone" class="form-control" value="{{ $user->phone}}">
                              </div>
                              <div class="form-group">
                                <label class="info-title" for="exampleInputEmail2">User Image <span></span></label>
                                <input type="file" id="profile_photo_path" name="profile_photo_path" class="form-control" >
                              </div>
                              <div class="form-group">
                                <button type="submit" class="btn btn-danger">Update</button>
                              </div>
                    
                        </form>
                    </div>
                        
                    </body>
                </div>                
            </div> {{--  end col --}}
        </div> {{--  end row --}}
    </div>
</div>

@endsection