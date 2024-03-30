<?php     
    session_start();
    $_SESSION["link"] = 'revenue.php';
    include 'checklogin.php';
    include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bloom.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="mainBody">
        <!-- ------------left side menubar------------  -->
        <div class="menubar">
            <!-- include logo and upper options -->
            <div class="up">
                <!-- logo -->
                <div class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.7637 3L13.0316 0L11.2996 3L1.73205 19.5714L0 22.5714H3.4641H3.95897L1.73205 26.4286L0 29.4286H3.4641H22.5991H26.0632L24.3312 26.4286L22.1043 22.5714H22.5991H26.0632L24.3312 19.5714L14.7637 3ZM20.9496 20.5714H22.5991L21.4444 18.5714L14.1863 6L13.0316 4L11.8769 6L4.6188 18.5714L3.4641 20.5714H5.11367L11.2996 9.85714L13.0316 6.85714L14.7637 9.85714L20.9496 20.5714ZM7.42308 20.5714L11.8769 12.8571L13.0316 10.8571L14.1863 12.8571L18.6402 20.5714H7.42308ZM6.26837 22.5714H19.7949L21.4444 25.4286L22.5991 27.4286H20.2897H5.7735H3.4641L4.6188 25.4286L6.26837 22.5714Z"
                            fill="white" />
                    </svg>
                    <p class="comName">BLOOM</p>
                </div>
                <!-- logo -->

                <!-- menu -->
                <div class="menu">
                    <!-- Dashboard -->
                    <a href="index.php" class="option">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M12 18.75C11.59 18.75 11.25 18.41 11.25 18V15C11.25 14.59 11.59 14.25 12 14.25C12.41 14.25 12.75 14.59 12.75 15V18C12.75 18.41 12.41 18.75 12 18.75Z"
                                fill="#C2C0FF" />
                            <path
                                d="M17.6 22.56H6.39996C4.57996 22.56 2.91996 21.16 2.61996 19.37L1.28996 11.4C1.06996 10.16 1.67996 8.57 2.66996 7.78L9.59996 2.23C10.94 1.15 13.05 1.16 14.4 2.24L21.33 7.78C22.31 8.57 22.91 10.16 22.71 11.4L21.38 19.36C21.08 21.13 19.38 22.56 17.6 22.56ZM11.99 2.93C11.46 2.93 10.93 3.09 10.54 3.4L3.60996 8.96C3.04996 9.41 2.64996 10.45 2.76996 11.16L4.09996 19.12C4.27996 20.17 5.32996 21.06 6.39996 21.06H17.6C18.67 21.06 19.72 20.17 19.9 19.11L21.23 11.15C21.34 10.45 20.94 9.39 20.39 8.95L13.46 3.41C13.06 3.09 12.52 2.93 11.99 2.93Z"
                                fill="#C2C0FF" />
                        </svg> Dashboard
                    </a>
                    <!-- Dashboard -->

                    <!-- Billing details -->
                    <a href="billingdetails.php" class="option">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H14C14.41 1.25 14.75 1.59 14.75 2C14.75 2.41 14.41 2.75 14 2.75H9C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V10C21.25 9.59 21.59 9.25 22 9.25C22.41 9.25 22.75 9.59 22.75 10V15C22.75 20.43 20.43 22.75 15 22.75Z" fill="#C2C0FF"/>
                            <path d="M22 10.748H18C14.58 10.748 13.25 9.41804 13.25 5.99804V1.99804C13.25 1.69804 13.43 1.41804 13.71 1.30804C13.99 1.18804 14.31 1.25804 14.53 1.46804L22.53 9.46804C22.6343 9.57311 22.7052 9.70665 22.7338 9.85189C22.7624 9.99713 22.7474 10.1476 22.6908 10.2843C22.6342 10.4211 22.5384 10.5381 22.4155 10.6206C22.2926 10.7031 22.148 10.7474 22 10.748ZM14.75 3.80804V5.99804C14.75 8.57804 15.42 9.24804 18 9.24804H20.19L14.75 3.80804Z" fill="#C2C0FF"/>
                        </svg> Billing details
                    </a>
                    <!-- Billing details -->

                    <!-- Patient details -->
                    <a href="patientdetails.php" class="option">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M18 7.912H17.87C15.98 7.852 14.57 6.392 14.57 4.592C14.57 2.752 16.07 1.262 17.9 1.262C19.73 1.262 21.23 2.762 21.23 4.592C21.2312 5.45666 20.8958 6.28784 20.2947 6.90943C19.6937 7.53102 18.8742 7.89419 18.01 7.922C18.01 7.912 18.01 7.912 18 7.912ZM17.9 2.752C16.89 2.752 16.07 3.572 16.07 4.582C16.07 5.572 16.84 6.372 17.83 6.412C17.84 6.402 17.92 6.402 18.01 6.412C18.4835 6.38078 18.9264 6.16705 19.2455 5.81582C19.5646 5.46458 19.7349 5.00324 19.7206 4.52893C19.7064 4.05462 19.5086 3.60435 19.1691 3.27291C18.8295 2.94147 18.3745 2.75473 17.9 2.752ZM18.009 15.28C17.619 15.28 17.229 15.25 16.839 15.18C16.7417 15.1631 16.6488 15.1272 16.5654 15.0742C16.4821 15.0213 16.41 14.9525 16.3534 14.8717C16.2967 14.7908 16.2565 14.6996 16.2352 14.6032C16.2139 14.5068 16.2117 14.4072 16.229 14.31C16.2459 14.2127 16.2818 14.1198 16.3348 14.0364C16.3877 13.9531 16.4565 13.881 16.5373 13.8244C16.6182 13.7677 16.7094 13.7275 16.8058 13.7062C16.9022 13.6849 17.0018 13.6827 17.099 13.7C18.329 13.91 19.629 13.68 20.499 13.1C20.969 12.79 21.219 12.4 21.219 12.01C21.219 11.62 20.959 11.24 20.499 10.93C19.629 10.35 18.309 10.12 17.069 10.34C16.659 10.42 16.269 10.14 16.199 9.73C16.129 9.32 16.399 8.93 16.809 8.86C18.439 8.57 20.129 8.88 21.329 9.68C22.209 10.27 22.719 11.11 22.719 12.01C22.719 12.9 22.219 13.75 21.329 14.35C20.419 14.95 19.239 15.28 18.009 15.28ZM5.97 7.91H5.95C5.08726 7.88299 4.26886 7.52145 3.66792 6.90184C3.06697 6.28223 2.73062 5.45316 2.73 4.59C2.73 2.75 4.23 1.25 6.06 1.25C7.89 1.25 9.39 2.75 9.39 4.58C9.39 6.39 7.98 7.85 6.18 7.91L5.97 7.16L6.04 7.91H5.97ZM6.07 6.41C6.13 6.41 6.18 6.41 6.24 6.42C7.13 6.38 7.91 5.58 7.91 4.59C7.90947 4.23244 7.80419 3.88286 7.60719 3.58447C7.41018 3.28607 7.13007 3.05192 6.80147 2.91095C6.47287 2.76999 6.11017 2.72837 5.75818 2.79126C5.40618 2.85414 5.08033 3.01876 4.82086 3.26478C4.56139 3.51081 4.37968 3.82746 4.29818 4.17561C4.21667 4.52376 4.23895 4.88816 4.36225 5.22379C4.48555 5.55942 4.70448 5.85158 4.99198 6.06417C5.27949 6.27676 5.62297 6.40046 5.98 6.42C5.99 6.41 6.03 6.41 6.07 6.41ZM5.96 15.28C4.73 15.28 3.55 14.95 2.64 14.35C1.76 13.76 1.25 12.91 1.25 12.01C1.25 11.12 1.76 10.27 2.64 9.68C3.84 8.88 5.53 8.57 7.16 8.86C7.57 8.93 7.84 9.32 7.77 9.73C7.7 10.14 7.31 10.42 6.9 10.34C5.66 10.12 4.35 10.35 3.47 10.93C3 11.24 2.75 11.62 2.75 12.01C2.75 12.4 3.01 12.79 3.47 13.1C4.34 13.68 5.64 13.91 6.87 13.7C7.28 13.63 7.67 13.91 7.74 14.31C7.81 14.72 7.54 15.11 7.13 15.18C6.74 15.25 6.35 15.28 5.96 15.28ZM12 15.38H11.87C9.98 15.32 8.57 13.86 8.57 12.06C8.57 10.22 10.07 8.73 11.9 8.73C13.73 8.73 15.23 10.23 15.23 12.06C15.2312 12.9247 14.8958 13.7558 14.2947 14.3774C13.6937 14.999 12.8742 15.3622 12.01 15.39C12.01 15.38 12.01 15.38 12 15.38ZM11.9 10.22C10.89 10.22 10.07 11.04 10.07 12.05C10.07 13.04 10.84 13.84 11.83 13.88C11.84 13.87 11.92 13.87 12.01 13.88C12.98 13.83 13.73 13.03 13.74 12.05C13.74 11.05 12.92 10.22 11.9 10.22ZM12.001 22.759C10.801 22.759 9.601 22.449 8.671 21.819C7.791 21.229 7.281 20.389 7.281 19.489C7.281 18.599 7.781 17.739 8.671 17.149C10.541 15.909 13.471 15.909 15.331 17.149C16.211 17.739 16.721 18.579 16.721 19.479C16.721 20.369 16.221 21.229 15.331 21.819C14.401 22.439 13.201 22.759 12.001 22.759ZM9.501 18.409C9.031 18.719 8.781 19.109 8.781 19.499C8.781 19.889 9.041 20.269 9.501 20.579C10.851 21.489 13.141 21.489 14.491 20.579C14.961 20.269 15.211 19.879 15.211 19.489C15.211 19.099 14.951 18.719 14.491 18.409C13.151 17.499 10.861 17.509 9.501 18.409Z" fill="#C2C0FF"/>
                        </svg> Patient details
                    </a>
                    <!-- Patient details -->

                    <!-- Revenue -->
                    <a href="revenue.php" class="option active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z" fill="white"/>
                            <path d="M7.32997 15.2381C7.16997 15.2381 7.00997 15.1881 6.86997 15.0781C6.79183 15.0183 6.72623 14.9438 6.6769 14.8586C6.62758 14.7735 6.5955 14.6796 6.5825 14.5821C6.5695 14.4846 6.57583 14.3854 6.60113 14.2904C6.62644 14.1953 6.67022 14.1062 6.72997 14.0281L9.10997 10.9381C9.39997 10.5681 9.80997 10.3281 10.28 10.2681C10.74 10.2081 11.21 10.3381 11.58 10.6281L13.41 12.0681C13.48 12.1281 13.55 12.1281 13.6 12.1181C13.64 12.1181 13.71 12.0981 13.77 12.0181L16.08 9.03806C16.1397 8.95967 16.2145 8.894 16.3 8.84491C16.3854 8.79582 16.4798 8.7643 16.5776 8.75219C16.6754 8.74008 16.7747 8.74763 16.8695 8.7744C16.9644 8.80116 17.0529 8.8466 17.13 8.90806C17.46 9.15806 17.52 9.62806 17.26 9.95806L14.95 12.9381C14.66 13.3081 14.25 13.5481 13.78 13.5981C13.31 13.6581 12.85 13.5281 12.48 13.2381L10.65 11.7981C10.6243 11.7756 10.5938 11.7593 10.5609 11.7507C10.5279 11.742 10.4934 11.7411 10.46 11.7481C10.42 11.7481 10.35 11.7681 10.29 11.8481L7.90997 14.9381C7.77997 15.1381 7.55997 15.2381 7.32997 15.2381Z" fill="white"/>
                          </svg> Revenue
                    </a>
                    <!-- Revenue -->

                    
                    
                </div>
            </div>
            <!-- include logo and upper options -->

            <div class="down">
                <!-- support and logout -->
                <div class="lower">
                    

                    <!-- Logout -->
                    <a href="logout.php" class="option">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M15.1 16.46C14.79 20.06 12.94 21.53 8.89 21.53H8.76C4.29 21.53 2.5 19.74 2.5 15.27V8.74997C2.5 4.27997 4.29 2.48997 8.76 2.48997H8.89C12.91 2.48997 14.76 3.93997 15.09 7.47997M9 12.02L20.38 12.02M18.15 15.37L21.5 12.02L18.15 8.66997"
                                stroke="#C2C0FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> Logout
                    </a>
                    <!-- Logout -->
                </div>
                <!-- support and logout -->
            </div>
        </div>
        <!-- ------------left side menubar------------  -->

        <!-- ------------Right side main page------------ -->
        <div class="right">
            <!-- navbar -->
            <div class="navbar">
            <div class="insideNav">
                <!-- search bar -->
                <div class="search-bar" id="searchBar">
                            <label for="search"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11.443 22.886C5.13539 22.886 0 17.7506 0 11.443C0 5.13539 5.13539 0 11.443 0C17.7506 0 22.886 5.13539 22.886 11.443C22.886 17.7506 17.7506 22.886 11.443 22.886ZM11.443 1.67458C6.05083 1.67458 1.67458 6.062 1.67458 11.443C1.67458 16.824 6.05083 21.2114 11.443 21.2114C16.8352 21.2114 21.2114 16.824 21.2114 11.443C21.2114 6.062 16.8352 1.67458 11.443 1.67458Z" fill="#5A57FF"/>
                                <path d="M23.1655 24.0023C22.9534 24.0023 22.7413 23.9241 22.5738 23.7567L20.341 21.5239C20.0173 21.2001 20.0173 20.6643 20.341 20.3405C20.6648 20.0167 21.2007 20.0167 21.5244 20.3405L23.7572 22.5733C24.0809 22.897 24.0809 23.4329 23.7572 23.7567C23.5897 23.9241 23.3776 24.0023 23.1655 24.0023Z" fill="#5A57FF"/>
                            </svg></label>
                            <input type="search" name="search" id="search" placeholder="Search by Patient ID or Name">
                            <div class="afterSearch displayNone" id="searchHistory">
                                <?php 
                                $select = "SELECT * FROM `patient_details`";
                                $querry = mysqli_query($con, $select);
                                while ($row = mysqli_fetch_array($querry)) {
                                ?>
                                        <a href="update.php?id=<?php echo $row['id'] ?>" class="afterSearchRow"><span class="ptnName"><?php echo $row['name'] ?></span><span class="ptnId">(<?php echo $row['patient_id'] ?>)</span> </a>
                                <?php } ?>        
                            </div>
                        </div>
                <!-- search bar -->

                <!-- notification, message and profile -->
                <?php include 'navr.php'?>
                <!-- notification, message and profile -->

            </div>
            </div>
            <!-- navbar -->

            <!-- profile -->
            
            <!-- profile -->
            <!-- lower part -->
            <div class="mainPage">
                <div class="mainPgUpper">
                    <div class="mplbox height378" id="mpuLeft">
                        <h1>Revenue</h1>
                        <div class="chart" id="smlChart">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <div class="mplbox height378" id="mpuRight">
                        <h1>Revenue by different depertment</h1>
                        <div class="chart" id="dognutCHart">
                            <canvas id="myDoughnutChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="mainPgLower"></div>
            </div>
            <!-- lower part -->
            <?php include "footer.php"; ?>
        </div> 
    </div> 

        <script src="JS/function.js"></script>

        <script>
        <?php 
        // bar chart
        $selectBarChart = "SELECT DATE(time) AS date, sum(net_amount) AS total_amount FROM `revenue` GROUP BY DATE(time) ORDER BY time DESC LIMIT 7";
        
        $chartQuery = mysqli_query($con,$selectBarChart);
        while($chartArr = mysqli_fetch_array($chartQuery)){
            $thisDate = $chartArr['date'];
            $thisAmount = $chartArr['total_amount'];
            echo "day('$thisDate');\n";
            echo "amountArr.push('$thisAmount');\n";
        }
        

        // Revenue by different depertment

        $depValArr = array();
        $indexx = 0;
        $total = 0;
        $forDep = "SELECT SUM(net_amount) as row, dept FROM `revenue` GROUP BY dept";
                // SELECT COUNT(*) AS row, `payThorugh` FROM `revenue` WHERE pay_status='Paid' GROUP BY payThorugh
        $depQuery = mysqli_query($con,$forDep);
        while($depArr = mysqli_fetch_array($depQuery)){
            $depValArr[$indexx] = $depArr['row'];
            $total+= $depArr['row'];
            echo "dept.push('".$depArr['dept']."')\n";
            $indexx++;
        }

        for ($i=0; $i < sizeof($depValArr); $i++) { 
            echo "deptVal.push(".($depValArr[$i]/$total)*100 . ")\n";
        }

        ?>
        </script>
        <script src="JS/smoothLineChart.js"></script>
        <script src="JS/doghnutChart.js"></script>
        <script src="JS/profilepopup.js"></script>
        <script src="JS/newsearch.js"></script>


</body>
</html>