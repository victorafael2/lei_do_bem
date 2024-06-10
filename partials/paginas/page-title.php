<?php



// **Total Company Count Query**
$sql = "SELECT COUNT(*) AS id FROM empresas";

$result = mysqli_query($conn, $sql);

// Check query execution
if (!$result) {
  die("Error retrieving company count: " . mysqli_error($conn));
}

// Fetch the company count from the result set
$row = mysqli_fetch_assoc($result);
$companyCount = $row['id'];

// **Previous Month Company Count Query**
$previousMonthStart = date('Y-m-01', strtotime('-1 month')); // Get first day of last month
$previousMonthEnd = date('Y-m-t', strtotime('-1 month')); // Get last day of last month

$sql = "SELECT COUNT(*) AS previous_month_count
        FROM empresas
        WHERE created BETWEEN '$previousMonthStart 00:00:00' AND '$previousMonthEnd 23:59:59'";

$result = mysqli_query($conn, $sql);

// Check query execution
if (!$result) {
  die("Error retrieving previous month company count: " . mysqli_error($conn));
}

// Fetch the previous month count from the result set
$row = mysqli_fetch_assoc($result);
$previousMonthCount = $row['previous_month_count'];

// Check if previous month count is zero to avoid division by zero
if ($previousMonthCount == 0) {
    $percentageIncrease = "Nenhum registro no mês anterior";
    $textColor = "text"; // Default text color
    $icon = ""; // No icon

} else {
    $percentageIncrease = round((($companyCount - $previousMonthCount) / $previousMonthCount) * 100, 2);
    $textColor = "text-success"; // Green text
    $icon = "mdi mdi-arrow-up-bold"; // Upward arrow icon
}


// projetos
// **Total Company Count Query**
$sql = "SELECT COUNT(*) AS id FROM projetos";

$result = mysqli_query($conn, $sql);

// Fetch the company count from the result set
$row = mysqli_fetch_assoc($result);
$n_projetos = $row['id'];




// Close the connection
mysqli_close($conn);






?>




<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Lei do Bem</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Homepage</li>
                </ol>
            </div>
            <h4 class="page-title">Homepage</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-5 col-lg-6">

        <div class="row">
            <div class="col-sm-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="mdi mdi-office-building widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Empresas</h5>
                        <h3 class="mt-3 mb-3"><?php echo $companyCount; ?></h3>
                        <p class="mb-0 text-muted">
                            <span class="<?php echo $textColor ?> me-2"><i class="<?php echo $icon ?>"></i> <?php echo $percentageIncrease; ?></span>
                            <!-- <span class="text-nowrap">Since last month</span> -->
                        </p>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-sm-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="mdi mdi-cart-plus widget-icon bg-success-lighten text-success"></i>
                    </div>
                    <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Projetos</h5>
                    <h3 class="mt-3 mb-3"><?php echo $n_projetos; ?></h3>
                    <p class="mb-0 text-muted">
                        <!-- <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 1.08%</span> -->
                        <span class="text-nowrap">Projetos cadastrados até o momento</span>
                    </p>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> <!-- end row -->

    <div class="row d-none">
        <div class="col-sm-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="mdi mdi-currency-usd widget-icon bg-success-lighten text-success"></i>
                    </div>
                    <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Revenue</h5>
                    <h3 class="mt-3 mb-3">$6,254</h3>
                    <p class="mb-0 text-muted">
                        <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                        <span class="text-nowrap">Since last month</span>
                    </p>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-sm-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-end">
                        <i class="mdi mdi-pulse widget-icon"></i>
                    </div>
                    <h5 class="text-muted fw-normal mt-0" title="Growth">Growth</h5>
                    <h3 class="mt-3 mb-3">+ 30.56%</h3>
                    <p class="mb-0 text-muted">
                        <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                        <span class="text-nowrap">Since last month</span>
                    </p>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> <!-- end row -->

</div> <!-- end col -->

<div class="col-xl-7 col-lg-6">
    <div class="card card-h-100">
        <div class="d-flex card-header justify-content-between align-items-center">
            <h4 class="header-title">Valores</h4>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div dir="ltr">
                <div id="high-performing-product" class="apex-charts" data-colors="#727cf5,#91a6bd40"></div>
            </div>

        </div> <!-- end card-body-->
    </div> <!-- end card-->

</div> <!-- end col -->
</div>




<!-- end page title -->