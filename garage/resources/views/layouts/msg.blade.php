<div class="container">
                <div class="row justify-content-center">
                    <div class="col-5">
                        @if(Session::has('danger_msg'))
                        <div class="alert alert-danger alert-dismissible fade show" role="danger">{{Session::get('danger_msg')}}</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        @endif
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-5">
                        @if(Session::has('info_msg'))
                        <div class="alert alert-info" role="alert">{{Session::get('info_msg')}}</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        @endif
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-5">
                        @if(Session::has('success_msg'))
                        <div class="alert alert-success" role="alert">{{Session::get('success_msg')}}</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        @endif
                    </div>
                </div>
            </div>