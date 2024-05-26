<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mb-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in! ") }} <b>{{ Auth::user()->name }}</b>  
                </div>
            </div>
        </div>
    </div>
  
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Sales Card -->
                <hr>
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Total Post </h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-card-list"></i>
                                </div>
                                <div class="ps-3">

                                    <span class="font-monospace"><small><b>Total post: </b>{{ $totalPosts }}</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Total Published Post </h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-chat-right-text-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <span class="font-monospace"><small><b>Total Published Post: </b>{{ $totalPublish }}</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-4">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Total Unpublished Post </h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-file-earmark-lock-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <span class="font-monospace"><small><b>Total Unpublished Post: </b>{{ $totalUnPublish }}</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <p class="font-monospace">Total publish post:<b>{{ $totalPosts }}</b> </p> -->
        </div>
    </div>
    <!-- <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p><small><b>Total post: </b>{{ $totalPublish }}</small></p>
            <hr>
            <p class="font-monospace">Total publish post:<b>{{ $totalPosts }}</b> </p> 
        </div>
    </div> -->
  
</x-app-layout>
