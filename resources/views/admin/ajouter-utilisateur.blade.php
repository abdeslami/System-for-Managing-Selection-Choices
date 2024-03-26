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
                @if (Session::has('success'))
                <div class="alert alert-success"role="alert">
                    <strong>{{Session::get('success')}}</strong>
                </div>
                @endif
                @if (Session::has('error'))
                <div class="alert alert-danger"role="alert">
                    <strong>{{Session::get('error')}}</strong>
                </div>
                @endif
              
                <form method="POST" action="{{ route('ajouter_utilisateurs_add') }}">
                    @csrf
                    @method('POST')

                    <div class="mb-4"> 
                        <label for="name" class="col-form-label text-md-end">nom</label>
                        <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       
                    </div>

                    <div class="mb-4"> 
                        <label for="email" class="col-form-label text-md-end">email adresse</label>
                        <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                       
                    </div>

                    <div class="mb-4"> 
                        <label for="password" class="col-form-label text-md-end">Role</label>
                        <select name="role" class="form-control">
                            <option>Selection un role</option>
                            <option value="admin">admin</option>
                            <option value="candidat">candidat</option>
                        </select>
                      
                    </div>
                    <div class="mb-4"> 
                        <label for="password" class="col-form-label text-md-end">password</label>
                        <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">
                      
                    </div>

                    

                    <div class="mb-4 d-grid gap-2 d-md-flex justify-content-md-center"> 
                        <button type="submit" style="background-color:#FF8450;color:wheat;" class=" px-5 py-2 fw-bold">Ajouter Utilisateur</button> <!-- Changed button text to French -->
                    </div>

                </form>
               
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="{{ asset('page_admin_script/script.js') }}"></script>
    <script src="{{ asset('page_admin_script/filter.js') }}"></script>

@endsection