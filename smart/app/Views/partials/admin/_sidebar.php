<div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="index.html" class="logo">
                        <i class="mdi mdi-alpha-x-circle"></i>
                        <span>
                            SMART ACCESS
                        </span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">

                        <li>
                            <a href="<?= site_url('dashboard') ?>" class="waves-effect"><i class="feather-airplay"></i>
                            <span>Tableau de bord</span></a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="feather-settings"></i><span>Paramètres</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= site_url('liste_service') ?>">Service</a></li>
                                <li><a href="<?= site_url('liste_type') ?>">Type de préoccupation</a></li>
                                <li><a href="<?= site_url('liste_param') ?>">Paramètres Généraux</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="feather-briefcase"></i> <span>Demandes <span class="badge badge-pill badge-success float-right">7</span></span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?= site_url('liste_demande_new') ?>">Nouvelles</a></li>
                                <li><a href="">En cours...</a></li>
                                <li><a href="">Traitées</a></li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="feather-bar-chart-2"></i><span>Statistiques</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatables.html">Data Tables</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="feather-user"></i><span>Utilisateurs</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatables.html">Data Tables</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>