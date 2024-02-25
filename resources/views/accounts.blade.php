<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/system.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/6b1ea01380.js" crossorigin="anonymous"></script>



    <title>Manage account </title>
</head>

<body>

    <section id="sidebar">
        <a class="logo" href="../pages/dashboard.html">
            <img alt='' src='../img/logo/logo.png'>

            <h4>Sales and Inventory Management System</h4>
        </a>
        <ul class="side-menu">
            <li class="divider" data-text="home">HOME</li>
            <li><a href="../pages/dashboard.html"><i class='bx bxs-dashboard icon'></i>
                    <div class="sideMenuText">Dashboard</div>
                </a></li>
            <li class="divider" data-text="main">Main</li>
            <li>
                <a href="../pages/customer.html"><i class='bx bxs-face icon'></i>
                    <div class="sideMenuText">Customer</div>
                </a>
            </li>
            <li>
                <a href="../pages/supplier.html"><i class='bx bxs-truck icon'></i>
                    <div class="sideMenuText">Supplier</div>
                </a>
            </li>
            <li>
                <a href="../pages/purchase_order.php"><i class='bx bxs-cart-alt icon'></i>
                    <div class="sideMenuText">Purchase Order</div>
                </a>
            </li>
            <li>
                <a href="#"><i class='bx bxs-notepad icon'></i>
                    <div class="sideMenuText">Products</div><i class='bx bx-chevron-right icon-right'></i>
                </a>
                <ul class="side-dropdown">
                    <li><a href="../pages/products.html">
                            <div class="sideMenuText">Product List</div>
                        </a></li>
                    <li><a href="../pages/category.html">
                            <div class="sideMenuText">Category</div>
                        </a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-boxes-stacked icon"></i></i>
                    <div class="sideMenuText">Stocks & Price</div><i class='bx bx-chevron-right icon-right'></i>
                </a>
                <ul class="side-dropdown">
                    <li><a href="../pages/stocks.html">
                            <div class="sideMenuText">Stock List</div>
                        </a></li>
                    <li><a href="../pages/price.html">
                            <div class="sideMenuText">Price</div>
                        </a></li>

                </ul>
            </li>
            <li class="divider" data-text="reports">REPORTS</li>
            <li>
                <a href="#"><i class='bx bxs-report icon'></i>
                    <div class="sideMenuText">Report</div><i class='bx bx-chevron-right icon-right'></i>
                </a>
                <ul class="side-dropdown">
                    <li><a href="#">
                            <div class="sideMenuText">Transactions Report</div>
                        </a></li>
                    <li><a href="#">
                            <div class="sideMenuText">Sales Report</div>
                        </a></li>
                    <li><a href="#">
                            <div class="sideMenuText">Overall Inventory</div>
                        </a></li>
                </ul>
            </li>

        </ul>

    </section>

    <section id="content">


        <nav>
            <i class='bx bx-menu toggle-sidebar'></i>

            <span class="divider"></span>
            <a class="nav-link" href="../pages/pos-admin.php">
                <i class="fa-solid fa-shop icon"></i>
            </a>
            <a class="nav-link" href="#">
                <i class='bx bxs-bell icon'></i>
                <span class="badge">5</span>
            </a>
            <a class="nav-link" href="#">
                <i class='bx bxs-message-square-dots icon'></i>
                <span class="badge">8</span>
            </a>

            <a class="nav-link" href="../pages/settings.html">
                <i class="fa-solid fa-gear icon"></i>
            </a>
            <a class="nav-link" href="../pages/accounts.html">
                <i class="fa-solid fa-users icon"></i>
            </a>
            <div class="profile">
                <div class="profileCon"><img alt="online" src="../img/profile/hutao.jpg">
                    <div class="usernameDis">
                    </div>
                </div>
                <ul class="profile-link">
                    <li><a href="../includes/logout.php"><i class='bx bxs-log-out-circle'></i>Logout</a></li>
                </ul>
            </div>
        </nav>


        <main>
            <h1 class="title">Users' Information</h1>



            <div class="table" id="users_table">
                <div class="table-includes">
                    <section class="table_header">
                        <h1>Users' Datatable</h1>
                        <div class="input-group">
                            <input placeholder="Search Data..." type="search">
                            <img alt="" src="../img/icon/search.png">
                        </div>

                    </section>


                    <div class="pagination-add">

                        <button class="add-btn" data-action="add" data-modal-target="crud-modal" data-modal-toggle="crud-modal"><span class="btn-text">Add Customer</span><i class='bx bxs-add-to-queue'></i></button>

                        <div class="pag">
                            <label for="perPage">Entries per page:</label>
                            <select id="perPage" onchange="updateItemsPerPage()">
                                <option value="10">10</option>
                                <option selected value="30">30</option>
                                <option value="60">60</option>
                                <option value="80">80</option>
                                <option value="100">100</option>
                            </select>
                            <button class="nxt-prv" id="prevBtn">Previous</button>
                            <button class="nxt-prv" id="nextBtn">Next</button>
                            <div class="pagination-info" id="paginationInfo"></div>
                        </div>
                    </div>
                </div>

                <div aria-hidden="true" class="modal-crud hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full" id="crud-modal" tabindex="-1">
                    <div class="relative p-4 w-full max-w-md max-h-full">

                        <div class="modal-content relative bg-white rounded-lg shadow dark:bg-gray-700">

                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Add New User
                                </h3>
                                <button class="close-btn text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal" type="button">
                                    <svg aria-hidden="true" class="w-3 h-3" fill="none" viewBox="0 0 14 14">
                                        <path d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>

                            <form action="../crud_php/addUser.php" class="p-4 md:p-5" id="add-customer" method="post" onsubmit="return confirm('Are you sure you want to save this data?')">
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="userIDAdd">User ID</label>
                                        <input class="disabledbg border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="userIDAdd" name="userID" readonly type="number">
                                    </div>
                                    <div class="col-span-2">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="userImgAdd">User Profile</label>
                                        <input accept="image/*" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="userImgAdd" name="userImg" type="file">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="userfnameAdd">First Name *</label>
                                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="userfnameAdd" name="fname" placeholder="Type here the first name" required="" type="text">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="userlnameAdd">Last Name* </label>
                                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="userlnameAdd" name="lname" placeholder="Type here the last name" required="" type="text">
                                    </div>
                                    <div class="col-span-2">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="userContactAdd">Contact * </label>
                                        <div class="con">
                                            <span class="text-sm font-medium text-gray-900 dark:text-white">(+63)</span> <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="userContactAdd" name="userContact" pattern="[0-9]{10}" placeholder="9xxxxxxxxx"
                                                required="" type="tel">
                                        </div><span class="text-sm font-sm font-medium text-gray-900 dark:text-white">(Format 10 digits: 9xxxxxxxxx)</span>
                                    </div>
                                    <div class="col-span-2">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="useremailAdd">Email Address * </label>
                                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="useremailAdd" name="userEmail" placeholder="email@example.com" required="" type="email">
                                    </div>
                                    <div class="col-span-2">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="usertypeAdd">Usertype * </label>
                                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="usertypeAdd" name="usertype" required="">
                                            <option value="">Select User Type</option>
                                            <option value="admin">Admin</option>
                                            <option value="staff">Staff</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="usernameAdd">Username * </label>
                                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="usernameAdd" name="username" placeholder="Type here the username" required="" type="text">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="passAdd">Password * </label>
                                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="passAdd" name="password" placeholder="Type here the password" required="" type="password">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="confirmuserpassAdd">Confirm Password * </label>
                                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="confirmuserpassAdd" name="confirmpassword" placeholder="Confirm password" required="" type="password">
                                    </div>
                                    <div class="col-span-2">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="branchAdd">Branch</label>
                                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="branchAdd" name="branchName" required="">
                                            <option value="">Select Branch</option>

                                        </select>
                                    </div>
                                    <div class="col-span-2">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="isActiveAdd">Is Active?</label>
                                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="isActiveAdd" name="isActive" required="">
                                            <option value="">Select Active Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                </div>
                                <button class="submit text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path clip-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" fill-rule="evenodd"></path>
                                    </svg>
                                    Add New User
                                </button>
                            </form>
                            <!-- MODAL BODY -->
                        </div>
                        <!-- MODAL CONTENT -->
                    </div>
                </div>
                <!-- MAIN MODAL -->


                <!-- UPDATE MAIN MODAL -->
                <div aria-hidden="true" class="modal-crud hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full" id="updateRecords" tabindex="-1">
                    <div class="relative p-4 w-full max-w-md max-h-full">

                        <!-- MODAL CONTENT -->
                        <div class="modal-content relative bg-white rounded-lg shadow dark:bg-gray-700">

                            <!-- MODAL HEADER -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Update Profile Information
                                </h3>
                                <button class="close-btn text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal" type="button">
                                    <svg aria-hidden="true" class="w-3 h-3" fill="none" viewBox="0 0 14 14">
                                        <path d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- MODAL HEADER -->

                            <!-- MODAL BODY -->
                            <form action="../crud_php/updateUser.php" class="p-4 md:p-5" id="update-user" method="post" onsubmit="return confirm('Are you sure you want to update this data?')">
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="userIDUpdate">User ID</label>
                                        <input class="disabledbg border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="userIDUpdate" name="userID" readonly type="number">
                                    </div>
                                    <div class="col-span-2">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="userImgUpdate">User Profile</label>
                                        <input accept="image/*" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="userImgUpdate" name="userImg" type="file">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="userfnameUpdate">First Name *</label>
                                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="userfnameUpdate" name="fname" required="" type="text">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="userlnameUpdate">Last Name* </label>
                                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="userlnameUpdate" name="lname" required="" type="text">
                                    </div>
                                    <div class="col-span-2">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="userContactUpdate">Contact * </label>
                                        <div class="con">
                                            <span class="text-sm font-medium text-gray-900 dark:text-white">(+63)</span> <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="userContactUpdate" name="userContact" pattern="[0-9]{10}" required=""
                                                type="tel">
                                        </div><span class="text-sm font-sm font-medium text-gray-900 dark:text-white">(Format 10 digits: 9xxxxxxxxx)</span>
                                    </div>
                                    <div class="col-span-2 ">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="useremailUpdate">Email Address * </label>
                                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="useremailUpdate" name="userEmail" required="" type="email">
                                    </div>
                                    <div class="col-span-2">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="usertypeUpdate">Usertype * </label>
                                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="usertypeUpdate" name="usertype" required="">
                                            <option value="">Select User Type</option>
                                            <option value="admin">Admin</option>
                                            <option value="staff">Staff</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="usernameUpdate">Username * </label>
                                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="usernameUpdate" name="username" required="" type="text">
                                    </div>
                                    <!-- Password Section -->
                                    <div class="password-section">
                                        <div class="col-span-2 sm:col-span-1">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="changePasswordCheckbox">Change Password</label>
                                            <input class="mr-1" id="changePasswordCheckbox" onchange="togglePasswordFields()" type="checkbox">
                                            <label class="text-sm font-medium text-gray-900 dark:text-white" for="changePasswordCheckbox">Check to change password</label>
                                        </div>
                                        <div id="passwordFields" style="display: none;">
                                            <div class="col-span-2 sm:col-span-1">
                                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="passUpdate">New Password *</label>
                                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="passUpdate" name="password" type="password">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="confirmuserpassUpdate">Confirm New Password *</label>
                                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="confirmuserpassUpdate" name="confirmpassword" placeholder="Confirm new password" type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Password Section -->
                                    <div class="col-span-2 ">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Added * </label>
                                        <input class="disabledbg bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="user_createdUpdate" name="user_created" readonly type="text">
                                    </div>
                                    <div class="col-span-2">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="lastactiveUpdate">Last Active * </label>
                                        <input class="disabledbg bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="lastactiveUpdate" name="last_active" readonly type="text">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="branchUpdate">Branch</label>
                                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="branchUpdate" name="branchName" required="">
                                            <option value="">Select Branch</option>

                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="isActiveUpdate">Is Active?</label>
                                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="isActiveUpdate" name="isActive" required="">
                                            <option value="">Select Active Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <button class="submit text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">
                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path clip-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" fill-rule="evenodd"></path>
                                        </svg>
                                        Update User
                                    </button>
                            </form>
                            <!-- MODAL BODY -->
                        </div>
                        <!-- MODAL CONTENT -->
                    </div>
                </div>
                <!-- UPDATE MAIN MODAL -->

        </main>
        <!-- MAIN -->
    </section>
    <!-- content -->



    <!--edit and archve records-->
    <script>
        //user-edit
        function editUser(userID, fname, lname, userContact, userEmail, usertype, username, user_created, last_active, isActive, branchName) {
            // Set the values of the input fields in the update modal with the user data
            document.getElementById("userIDUpdate").value = userID;
            document.getElementById("userfnameUpdate").value = fname;
            document.getElementById("userlnameUpdate").value = lname;
            document.getElementById("userContactUpdate").value = userContact;
            document.getElementById("useremailUpdate").value = userEmail;
            document.getElementById("usertypeUpdate").value = usertype;
            document.getElementById("usernameUpdate").value = username;
            document.getElementById("user_createdUpdate").value = user_created;
            document.getElementById("lastactiveUpdate").value = last_active;
            document.getElementById("isActiveUpdate").value = isActive;
            document.getElementById("branchUpdate").value = branchName;
        }


        document.querySelectorAll(".edit-btn").forEach(function(button) {
            button.addEventListener("click", function() {
                var userID = this.getAttribute("data-userID");
                var fname = this.getAttribute("data-fname");
                var lname = this.getAttribute("data-lname");
                var userContact = this.getAttribute("data-userContact");
                var userEmail = this.getAttribute("data-userEmail");
                var usertype = this.getAttribute("data-usertype");
                var username = this.getAttribute("data-username");
                var user_created = this.getAttribute("data-user_created");
                var last_active = this.getAttribute("data-last_active");
                var isActive = this.getAttribute("data-isActive");
                var branchName = this.getAttribute("data-branchName");


                editUser(userID, fname, lname, userContact, userEmail, usertype, username, user_created, last_active, isActive, branchName);
            });
        });



        //arcvhing records

        document.addEventListener('DOMContentLoaded', function() {
            // Get all archive buttons
            var archiveButtons = document.querySelectorAll('.btn-archive');

            // Attach a click event listener to each archive button
            archiveButtons.forEach(function(archiveButton) {
                archiveButton.addEventListener('click', function() {
                    // Get the userID from the data-id-value attribute
                    var userID = this.getAttribute('data-id-value');

                    // Show confirmation dialog
                    if (confirm('Are you sure you want to archive this data?')) {
                        // Send an AJAX request to archiveRecords.php
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', '../crud_php/archiveUser.php', true);
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState == 4 && xhr.status == 200) {
                                // Get the current page's URL
                                var currentPageURL = window.location.href;

                                // Redirect the user to the current page
                                window.location.href = currentPageURL;

                            } else if (xhr.readyState == 4) {
                                // An error occurred while archiving the user
                                alert('Error: ' + xhr.responseText);
                            }
                        };
                        xhr.send('userID=' + encodeURIComponent(userID));
                    } else {
                        // User cancelled the action

                    }
                });
            });
        });

        function togglePasswordFields() {
            const checkbox = document.getElementById('changePasswordCheckbox');
            const passwordFields = document.getElesmentById('passwordFields');
            if (checkbox.checked) {
                // If checked, show the password fields
                passwordFields.style.display = 'block';
            } else {
                // If not checked, hide the password fields
                passwordFields.style.display = 'none';
            }
        }
    </script>

    <!--edit and archve records-->

    <script src="../js/table.js"></script>
    <script src="../js/toggle.js"></script>
    <script src="../js/modal.js"></script>


    <!--FLOWBITE JS IN CRUD MODAL-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>-->


</body>

</html>
