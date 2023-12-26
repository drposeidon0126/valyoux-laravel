@extends('layouts.master')

@section('title') @lang('translation.Read_Email') @endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/summernote/summernote.min.css') }}">
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Read Email @endslot
        @slot('li_1') Email @endslot
        @slot('li_2') Read Email @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <!-- Left sidebar -->
            <div class="email-leftbar card">
                <button type="button" class="btn btn-danger btn-block waves-effect waves-light" data-toggle="modal"
                    data-target="#composemodal">
                    Compose
                </button>
                <div class="mail-list mt-4">
                    <a href="#" class="active"><i class="mdi mdi-email-outline mr-2"></i> Inbox <span
                            class="ml-1 float-right">(18)</span></a>
                    <a href="#"><i class="mdi mdi-star-outline mr-2"></i>Starred</a>
                    <a href="#"><i class="mdi mdi-diamond-stone mr-2"></i>Important</a>
                    <a href="#"><i class="mdi mdi-file-outline mr-2"></i>Draft</a>
                    <a href="#"><i class="mdi mdi-email-check-outline mr-2"></i>Sent Mail</a>
                    <a href="#"><i class="mdi mdi-trash-can-outline mr-2"></i>Trash</a>
                </div>

                <h6 class="mt-4">Labels</h6>

                <div class="mail-list mt-1">
                    <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info float-right"></span>Theme Support</a>
                    <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning float-right"></span>Freelance</a>
                    <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-primary float-right"></span>Social</a>
                    <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-danger float-right"></span>Friends</a>
                    <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-right"></span>Family</a>
                </div>

                <h6 class="mt-4">Chat</h6>

                <div class="mt-2">
                    <a href="#" class="media">
                        <img class="d-flex mr-3 rounded-circle" src="assets/images/users/avatar-2.jpg"
                            alt="Generic placeholder image" height="36">
                        <div class="media-body chat-user-box">
                            <p class="user-title m-0">Scott Median</p>
                            <p class="text-muted">Hello</p>
                        </div>
                    </a>

                    <a href="#" class="media">
                        <img class="d-flex mr-3 rounded-circle" src="assets/images/users/avatar-3.jpg"
                            alt="Generic placeholder image" height="36">
                        <div class="media-body chat-user-box">
                            <p class="user-title m-0">Julian Rosa</p>
                            <p class="text-muted">What about our next..</p>
                        </div>
                    </a>

                    <a href="#" class="media">
                        <img class="d-flex mr-3 rounded-circle" src="assets/images/users/avatar-4.jpg"
                            alt="Generic placeholder image" height="36">
                        <div class="media-body chat-user-box">
                            <p class="user-title m-0">David Medina</p>
                            <p class="text-muted">Yeah everything is fine</p>
                        </div>
                    </a>

                    <a href="#" class="media">
                        <img class="d-flex mr-3 rounded-circle" src="assets/images/users/avatar-6.jpg"
                            alt="Generic placeholder image" height="36">
                        <div class="media-body chat-user-box">
                            <p class="user-title m-0">Jay Baker</p>
                            <p class="text-muted">Wow that's great</p>
                        </div>
                    </a>

                </div>
            </div>
            <!-- End Left sidebar -->

            <!-- Right Sidebar -->
            <div class="email-rightbar mb-3">

                <div class="card">
                    <div class="btn-toolbar p-3" role="toolbar">
                        <div class="btn-group mr-2 mb-2 mb-sm-0">
                            <button type="button" class="btn btn-primary waves-light waves-effect"><i
                                    class="fa fa-inbox"></i></button>
                            <button type="button" class="btn btn-primary waves-light waves-effect"><i
                                    class="fa fa-exclamation-circle"></i></button>
                            <button type="button" class="btn btn-primary waves-light waves-effect"><i
                                    class="far fa-trash-alt"></i></button>
                        </div>
                        <div class="btn-group mr-2 mb-2 mb-sm-0">
                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle"
                                data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ml-1"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Updates</a>
                                <a class="dropdown-item" href="#">Social</a>
                                <a class="dropdown-item" href="#">Team Manage</a>
                            </div>
                        </div>
                        <div class="btn-group mr-2 mb-2 mb-sm-0">
                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle"
                                data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ml-1"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Updates</a>
                                <a class="dropdown-item" href="#">Social</a>
                                <a class="dropdown-item" href="#">Team Manage</a>
                            </div>
                        </div>

                        <div class="btn-group mr-2 mb-2 mb-sm-0">
                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle"
                                data-toggle="dropdown" aria-expanded="false">
                                More <i class="mdi mdi-dots-vertical ml-2"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Mark as Unread</a>
                                <a class="dropdown-item" href="#">Mark as Important</a>
                                <a class="dropdown-item" href="#">Add to Tasks</a>
                                <a class="dropdown-item" href="#">Add Star</a>
                                <a class="dropdown-item" href="#">Mute</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-circle avatar-sm" src="assets/images/users/avatar-2.jpg"
                                alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="font-size-14 mt-1">Humberto D. Champion</h5>
                                <small class="text-muted">support@domain.com</small>
                            </div>
                        </div>

                        <h4 class="mt-0 font-size-16">This Week's Top Stories</h4>

                        <p>Dear Lorem Ipsum,</p>
                        <p>Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in
                            fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum
                            volutpat massa vulputate molestie. In at felis ac velit maximus convallis.
                        </p>
                        <p>Sed elementum turpis eu lorem interdum, sed porttitor eros commodo. Nam eu venenatis tortor, id
                            lacinia diam. Sed aliquam in dui et porta. Sed bibendum orci non tincidunt ultrices. Vivamus
                            fringilla, mi lacinia dapibus condimentum, ipsum urna lacinia lacus, vel tincidunt mi nibh sit
                            amet lorem.</p>
                        <p>Sincerly,</p>
                        <hr />

                        <div class="row">
                            <div class="col-xl-2 col-6">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="assets/images/small/img-3.jpg"
                                        alt="Card image cap">
                                    <div class="py-2 text-center">
                                        <a href="" class="font-weight-medium">Download</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-6">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="assets/images/small/img-4.jpg"
                                        alt="Card image cap">
                                    <div class="py-2 text-center">
                                        <a href="" class="font-weight-medium">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="email-compose" class="btn btn-secondary waves-effect mt-4"><i class="mdi mdi-reply"></i>
                            Reply</a>
                    </div>

                </div>
            </div>
            <!-- card -->

        </div>
        <!-- end Col-9 -->

    </div>

    </div>
    <!-- End row -->

    <!-- Modal -->
    <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="To">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <div class="summernote">
                                <h6>Hello Summer note</h6>
                                <ul>
                                    <li>
                                        Select a text to reveal the toolbar.
                                    </li>
                                    <li>
                                        Edit rich document on-the-fly, so elastic!
                                    </li>
                                </ul>
                                <p>
                                    End of air-mode area
                                </p>

                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send <i class="fab fa-telegram-plane ml-1"></i></button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <!-- Summernote js -->
    <script src="{{ URL::asset('assets/libs/summernote/summernote.min.js') }}"></script>

    <!-- email summernote init -->
    <script src="{{ URL::asset('assets/js/pages/email-summernote.init.js') }}"></script>

@endsection
