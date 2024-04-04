<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.php" class="logo logo-light">
        <span class="logo-lg">
            <img src="assets/images/lei_do_bem.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/lei_do_bem.png" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="assets/images/lei_do_bem.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/lei_do_bem.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="assets/images/users/matech.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">Matech</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Menu</li>

            <!-- <li class="side-nav-item">
                <a href="index.php?id=1" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end d-none">5</span>
                    <span> Cadastro de Usuário </span>
                </a>
            </li> -->

                <!-- <?php


                // Consulta SQL para obter os itens do menu da tabela 'pages'
                $sql = "SELECT * FROM pages";
                $result = $conn->query($sql);

                // Verificar se há resultados da consulta
                if ($result->num_rows > 0) {
                    // Exibir os itens do menu

                    while ($row = $result->fetch_assoc()) {
                        echo '<li class="side-nav-item">';

                        echo '<a href="page.php?id=' . $row["id"] . '" class="side-nav-link">';
                        echo ' <i class="'. $row["icone"] .'"></i>';
                        echo '<span>' . $row["nome_pagina"] . '</span>';
                        echo '</a>';
                        echo '</li>';
                    }

                } else {
                    echo "0 resultados";
                }

                // Fechar conexão com o banco de dados
                // $conn->close();
                ?> -->

<?php
// Consulta SQL para obter os itens do menu da tabela 'pages'
$sql = "SELECT * FROM pages where ver = 'sim'";
$result = $conn->query($sql);

// Verificar se há resultados da consulta
if ($result->num_rows > 0) {
    // Inicializar um array para armazenar os itens do menu agrupados por projeto
    $menu_por_projeto = array();

    // Organizar os itens do menu por projeto
    while ($row = $result->fetch_assoc()) {
        $projeto = $row["categoria"];
        if (!isset($menu_por_projeto[$projeto])) {
            $menu_por_projeto[$projeto] = array();
        }
        $menu_por_projeto[$projeto][] = $row;
    }

    // Exibir os itens do menu agrupados por projeto
    foreach ($menu_por_projeto as $projeto => $itens) {
        echo '<li class="side-nav-item">';
        echo '<a data-bs-toggle="collapse" href="#' . $projeto . '" aria-expanded="false" aria-controls="' . $projeto . '" class="side-nav-link">';
        // Adicionar ícone ao lado do nome do projeto usando a classe do ícone do banco de dados
        echo '<i class="' . $itens[0]["icone"] . '"></i>';
        echo '<span>' . $projeto . '</span>';
        echo '<span class="menu-arrow"></span>';
        echo '</a>';
        echo '<div class="collapse" id="' . $projeto . '">';
        echo '<ul class="side-nav-second-level">';

        // Exibir os itens do menu dentro deste projeto
        foreach ($itens as $item) {
            echo '<li class="side-nav-item">';

            echo '<a href="page.php?id=' . $item["id"] . '"><i class="' .  $item["icone"] . '"></i>  ' . $item["nome_pagina"] . '</a>';
            echo '</li>';
        }

        echo '</ul>';
        echo '</div>';
        echo '</li>';
    }
} else {
    echo "0 resultados";
}
?>







            <li class="side-nav-title d-none">Custom</li>

            <li class="side-nav-item d-none">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                    <i class="uil-copy-alt"></i>
                    <span> Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="pages-faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="pages-maintenance.html">Maintenance</a>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth">
                                <span> Authentication </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPagesAuth">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="pages-login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="pages-login-2.html">Login 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="pages-register-2.html">Register 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-logout.html">Logout</a>
                                    </li>
                                    <li>
                                        <a href="pages-logout-2.html">Logout 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-recoverpw.html">Recover Password</a>
                                    </li>
                                    <li>
                                        <a href="pages-recoverpw-2.html">Recover Password 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-lock-screen.html">Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="pages-lock-screen-2.html">Lock Screen 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-confirm-mail.html">Confirm Mail</a>
                                    </li>
                                    <li>
                                        <a href="pages-confirm-mail-2.html">Confirm Mail 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError">
                                <span> Error </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPagesError">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="pages-404.html">Error 404</a>
                                    </li>
                                    <li>
                                        <a href="pages-404-alt.html">Error 404-alt</a>
                                    </li>
                                    <li>
                                        <a href="pages-500.html">Error 500</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="pages-starter.html">Starter Page</a>
                        </li>
                        <li>
                            <a href="pages-preloader.html">With Preloader</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item d-none">
                <a href="landing.html" target="_blank" class="side-nav-link">
                    <i class="uil-globe"></i>
                    <span class="badge text-bg-secondary float-end">New</span>
                    <span> Landing </span>
                </a>
            </li>

            <li class="side-nav-item d-none">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <i class="uil-window"></i>
                    <span> Layouts </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="layouts-horizontal.html" target="_blank">Horizontal</a>
                        </li>
                        <li>
                            <a href="layouts-detached.html" target="_blank">Detached</a>
                        </li>
                        <li>
                            <a href="layouts-full.html" target="_blank">Full View</a>
                        </li>
                        <li>
                            <a href="layouts-fullscreen.html" target="_blank">Fullscreen View</a>
                        </li>
                        <li>
                            <a href="layouts-hover.html" target="_blank">Hover Menu</a>
                        </li>
                        <li>
                            <a href="layouts-compact.html" target="_blank">Compact</a>
                        </li>
                        <li>
                            <a href="layouts-icon-view.html" target="_blank">Icon View</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title d-none">Other</li>

            <li class="side-nav-item d-none">
                <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
                    <i class="uil-folder-plus"></i>
                    <span> Multi Level </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMultiLevel">
                    <ul class="side-nav-second-level">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
                                <span> Second Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarSecondLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="javascript: void(0);">Item 1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Item 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                <span> Third Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarThirdLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="javascript: void(0);">Item 1</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                            <span> Item 2 </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarFourthLevel">
                                            <ul class="side-nav-forth-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>


            <!-- Help Box -->
            <!-- <div class="help-box text-white text-center">
                <a href="javascript: void(0);" class="float-end close-btn text-white">
                    <i class="mdi mdi-close"></i>
                </a>
                <img src="assets/images/svg/help-icon.svg" height="90" alt="Helper Icon Image" />
                <h5 class="mt-3">Unlimited Access</h5>
                <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
            </div> -->
            <!-- end Help Box -->


        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->