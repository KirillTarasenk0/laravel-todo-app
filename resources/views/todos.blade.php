<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Laravel Todo App') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-light">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="max-width: 70rem; padding: 1.5rem; margin: auto;">
            <div class="row" style="display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                @foreach($todos as $todo)
                    <div class="col-md-4" style="flex: 0 0 100%; max-width: 100%; padding: 2rem;">
                        <div class="card mb-4 shadow-sm" style="margin-bottom: 1.5rem; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15); background-color: #edf2f7;">
                            <div class="card-header bg-primary text-white" style="background-color: #4299e1; color: #fff; padding: 1rem;">
                                <h4 class="my-0 font-weight-normal" style="margin: 0; font-weight: 400; font-size: 1.5rem;">{{ $todo->title }}</h4>
                            </div>
                            <div class="card-body" style="padding: 2rem;">
                                <h1 class="card-title pricing-card-title" style="margin-bottom: 1rem; font-size: 2rem;">{{ $todo->priority }} <small class="text-muted" style="font-size: 80%; font-weight: 400;">/ priority</small></h1>
                                <ul class="list-unstyled mt-3 mb-4" style="margin-top: 1rem; margin-bottom: 1.5rem;">
                                    <li style="font-size: 1.25rem;">{{ $todo->description }}</li>
                                    <li style="font-size: 1.25rem;">Due date: {{ $todo->due_date }}</li>
                                    <li style="font-size: 1.25rem;">Status: {{ $todo->status }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
