@extends("layouts.compte-layout")

@section("css/js links")

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('page_admin_css/style.css') }}">
    
        <link rel="stylesheet" href="https://unpkg.com/ag-grid/dist/styles/ag-grid.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/ag-grid-community@31.1.1/styles/ag-theme-quartz.css" />
        
        <!-- Load ag-Grid scripts -->
        <script src="https://cdn.jsdelivr.net/npm/ag-grid-community/dist/ag-grid-community.min.noStyle.js"></script>
        <!-- Load Excel export module -->
        <script src="https://cdn.jsdelivr.net/npm/ag-grid-enterprise/dist/ag-grid-enterprise.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
@section("content")
    
            <div class="container p-4">
                @if (Session::has('error'))
                <div class="alert alert-warning"role="alert">
                    <strong>{{Session::get('error')}}</strong>
                </div>
                @endif
                @if (Session::has('success'))
                <div class="alert alert-success"role="alert">
                    <strong>{{Session::get('success')}}</strong>
                </div>
                @endif
                <a href="{{route('ajouter_utilisateurs')}}" class="btn btn-success px-3 mb-3"><img src="{{asset('page_admin_image/add-person.svg')}}" alt="">Add utilisateur</a>
                <table id="emp-table" class="table table-striped table-hover table-responsive w-100">
                    <thead>
                        <tr>
                            <th col-index="1" class="text-center">Name</th>
                            <th col-index="2" class="text-center">Email</th>
                            <th col-index="3" class="text-center">
                                Role:
                                <select class="table-filter form-select" onchange="filter_rows()">
                                    <option value="all">All</option>
                                    <option value="admin">admin</option>
                                    <option value="candidat">candidat</option>

                                </select>
                            </th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            <td class="text-center">
                                <form class="deleteForm d-inline-block" method="post" action="{{ route('deleteUser', ['id' => $user->id]) }}">
                                    @method('DELETE')
                                    @csrf 
                                    <button class="btn btn-outline-danger rounded-0 delete-btn" title="delete"  type="button"><img title="delete" src="{{ asset('images/trash.svg') }}" alt=""></button>
                                </form>
                                <form method="post" class="d-inline-block" action="{{ route('updateForm', $user->id) }}">
                                    @csrf
                                
                                    <button class="btn btn-outline-warning rounded-0 update-btn" title="update"  type="submit"><img title="update" src="{{ asset('images/edit.svg') }}" alt=""></button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                        
                        <script>
                            document.querySelectorAll('.delete-btn').forEach(button => {
                                button.addEventListener('click', confirmDelete);
                            });
                        
                            function confirmDelete(event) {
                                event.preventDefault();
                                if (confirm("Êtes-vous sûr de vouloir supprimer cet utilisateur ?")) {
                                    event.target.closest('.deleteForm').submit(); 
                                }
                            }
                        </script>
                        
                       
                        
                    </tbody>
                </table>    
            
               
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../../../../../../page_admin_script/script.js"></script>
    <script src="../../../../../../page_admin_script/filter.js"></script>

@endsection

