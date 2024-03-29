@extends("layouts.compte-layout")

@section("css/js links")

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('storage/dossier_scan/' .'page_admin_css/style.css') }}">
    
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
@if ($candidature->nom!=null)
        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
            <div class="card border-0 shadow">
                <img src="{{ asset('storage/dossier_scan/' .$candidature->photo_personnel) }}" alt="...">
                <div class="card-body p-1-9 p-xl-5">
                    <div class="mb-4">
                        <h3 class="h4 mb-0">{{$candidature->nom}} {{$candidature->prenom}}</h3>
                        <span class="text-primary">{{$candidature->date_naissance}}</span>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-3"><a href="#!"><i class="far fa-envelope display-25 me-3 text-secondary"></i>{{$candidature->cne_cme}}</a></li>
                        <li class="mb-3"><a href="#!"><i class="fas fa-mobile-alt display-25 me-3 text-secondary"></i>{{$candidature->num_tel}}</a></li>
                        <li><a href="#!"><i class="fas fa-map-marker-alt display-25 me-3 text-secondary"></i>{{$candidature->ville_natale}} {{$candidature->adresse}}</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="ps-lg-1-6 ps-xl-5">
              <div
                class="table-responsive"
              >
              <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom de Fichier</th>
                        <th scope="col">Fichier</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">CIN</td>
                        <td>
                            @if ($candidature->scan_cin !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->scan_cin) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Photo Personnel</td>
                        <td>
                            @if ($candidature->photo_personnel!=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->photo_personnel) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    @if ($candidature->diplome)
                  
                    <tr class="">
                        <td scope="row">Bac</td>
                        <td>
                            @if ($candidature->scan_bac!=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->scan_bac) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Diplome Principal</td>
                        <td>
                            @if ($candidature->diplome->scan_diplome!=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->scan_diplome) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Releve Note de Semaitre 1</td>
                        <td>
                            @if ($candidature->diplome->releve_s1 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->releve_s1) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Releve Note de Semaitre 2</td>
                        <td>
                            @if ($candidature->diplome->releve_s2 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->releve_s2) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Releve Note de Semaitre 3</td>
                        <td>
                            @if ($candidature->diplome->releve_s3 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->releve_s3) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Releve Note de Semaitre 4</td>
                        <td>
                            @if ($candidature->diplome->releve_s4 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->releve_s4) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Releve Note de Semaitre 5</td>
                        <td>
                            @if ($candidature->diplome->releve_s5 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->releve_s5) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Releve Note de Semaitre 6</td>
                        <td>
                            @if ($candidature->diplome->releve_s6 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->releve_s6) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Releve Note de Semaitre 7</td>
                        <td>
                            @if ($candidature->diplome->releve_s7 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->releve_s7) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Releve Note de Semaitre 8</td>
                        <td>
                            @if ($candidature->diplome->releve_s8 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->releve_s8) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Releve Note de Semaitre 9</td>
                        <td>
                            @if ($candidature->diplome->releve_s9 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->releve_s9) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Releve Note de Semaitre 10</td>
                        <td>
                            @if ($candidature->diplome->releve_s10 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->releve_s10) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Diplome Supplimentaire 1</td>
                        <td>
                            @if ($candidature->diplome->diplome_supp1 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->diplome_supp1) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Diplome Supplimentaire 2</td>
                        <td>
                            @if ($candidature->diplome->diplome_supp2 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->diplome_supp2) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Diplome Supplimentaire 3</td>
                        <td>
                            @if ($candidature->diplome->diplome_supp3 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->diplome_supp3) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Diplome Supplimentaire 4</td>
                        <td>
                            @if ($candidature->diplome->diplome_supp4 !=null)
                                <a href="{{ asset('storage/dossier_scan/' .$candidature->diplome->diplome_supp4) }}" target="_blank">Ouvrir le PDF</a>
                            @else
                                Aucun document trouvé
                            @endif
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
            
              </div>
              
    </div>
</div>
@else
<h1 class="text-center"> Aucun document trouvé</h1>
@endif
   
@endsection
