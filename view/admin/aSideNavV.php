<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li><button class="tree_list">Manage User Roles</button>
                <ul class="tree_nest">
                    <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
                        <button name="userroleList-submit">
                            <a href="#">
                                <li><i class="fa fa-user"></i> View user-role list</li>
                            </a>
                        </button>
                    </form>
                    <button>
                        <a href="aAddNewUserRoleV.php"><li><i class="fa fa-plus-circle"></i> Add a new user-role</li></a>
                    </button>
                    <button>
                        <a href="../../controller/getRolesController.php"><li><i class="fa fa-trash"></i> Remove a user-role</li></a>
                    </button>
                    <button>
                        <a href="../../controller/adminControllers/aAssignUserRoleControler.php"><li><i class="fa fa-pencil-square-o"></i> Assign a user-role to a user</li></a>
                    </button>
                    <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
                        <button name="userList-submit">
                            <a href="#">
                                <li><i class="fa fa-pencil-square"></i> Remove a user-role from a user</li>
                            </a>
                        </button>
                    </form>
                </ul>
            </li>

            <li>
                <a href="../../controller/adminControllers/userListController.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Manage Users in IMS</button>
                </a>
            </li>

            <li><button class="tree_list">Manage Departments</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/adminControllers/aViewDepartmentController.php"><li><i class="fa fa fa-check-circle"></i> View Departments</li></a>
                    </button>
                    <button>
                        <a href="../../controller/adminControllers/aAddDepartmentController.php"><li><i class="fa fa-plus-circle"></i> Add a new Department</li></a>
                    </button>
                    <button>
                        <a href="../../controller/adminControllers/aUpDepartmentController.php"><li><i class="fa fa-pencil-square"></i> Update or remove a Department</li></a>
                    </button>
                </ul>
            </li>

            <li><button class="tree_list">Manage Designations</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/adminControllers/aViewDesignationController.php"><li><i class="fa fa-user"></i> View Designation</li></a>
                    </button>
                    <button>
                        <a href="aAddDesignationV.php"><li><i class="fa fa-plus-circle"></i> Add a new Designation</li></a>
                    </button>
                    <button>
                        <a href="../../controller/adminControllers/aUpDesignationController.php"><li><i class="fa fa-pencil-square"></i> Update or remove a Designation</li></a>
                    </button>
                </ul>
            </li>

            <li><button class="tree_list">Manage Posts</button>
                <ul class="tree_nest">
                    <form action="../../controller/adminControllers/managePostsC.php" method="post">
                        <button name="viwePostDetails-submit" type="submit">
                            <a href="#"><li><i class="fa fa-user"></i> View Posts</li></a>
                        </button>
                        <button name="getUsers-submit" type="submit">
                            <a href="#"><li><i class="fa fa-plus-circle"></i> Add a Post</li></a>
                        </button>
                        <button name="getPosts-submit" type="submit">
                            <a href="#"><li><i class="fa fa-pencil-square"></i> Update user of a Post</li></a>
                        </button>
                        <button name="viwePostList-submit" type="submit">
                            <a href="#"><li><i class="fa fa-trash"></i> Remove a Post</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">Manage Degrees</button>
                <ul class="tree_nest">
                    <form action="../../controller/adminControllers/manageDegreesC.php" method="post">
                        <button name="degreeList-submit" type="submit">
                            <a href="#">
                                <li><i class="fa fa-graduation-cap"></i> View degree list</li></a>
                        </button>
                    </form>

                    <button>
                        <a href="aAddDegreeV.php"><li><i class="fa fa-plus-circle"></i> Add a new degree</li></a>
                    </button>

                    <form action="../../controller/adminControllers/manageDegreesC.php" method="post">
                        <button name="getDegree-submit" type="submit">
                            <a href="#"><li><i class="fa fa-pencil-square"></i> Update or remove degrees</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">Manage Semesters</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/adminControllers/aViewSemesterController.php"><li><i class="fa fa-graduation-cap"></i> View Semesters</li></a>
                    </button>
                    <button>
                        <a href="aAddSemesterV.php"><li><i class="fa fa-plus-circle"></i> Add a new Semester</li></a>
                    </button>
                    <button>
                        <a href="../../controller/adminControllers/aUpSemesterController.php"><li><i class="fa fa-pencil-square"></i> Update or remove a Semester</li></a>
                    </button>
                </ul>
            </li>

            <li><button class="tree_list">Manage Session Types</button>
                <ul class="tree_nest">
                    <form action="../../controller/adminControllers/manageSessionsC.php" method="post">
                        <button name="sessionTypeList-submit">
                            <a href="#">
                                <li><i class="fa fa fa-check-circle"></i> View Session Types</li>
                            </a>
                        </button>
                    </form>

                    <button>
                        <a href="aAddSessionV.php"><li><i class="fa fa-plus-circle"></i> Add Session Types</li></a>
                    </button>

                    <form action="../../controller/adminControllers/manageSessionsC.php" method="post">
                        <button name="getTypeSIdeNave-submit" >
                            <a href="aRemoveSessionTypeV.php">
                                <li><i class="fa fa-trash"></i> Remove Session types</li>
                            </a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">Manage Sessions Per Month</button>
                <ul class="tree_nest">
                    <form action="../../controller/adminControllers/manageMonthlySessionsC.php" method="post">
                        <button name="getDegree-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i> View sessions of a subject</li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/adminControllers/manageMonthlySessionsC.php" method="post">
                        <button name="assignSession-submit">
                            <a href="#">
                                <li><i class="fa fa-plus-circle"></i> Assign a monthly session</li>
                            </a>
                        </button>
                    </form>

                     <form action="../../controller/adminControllers/manageMonthlySessionsC.php" method="post">
                        <button name="sessionTypesList-submit">
                            <a href="#">
                                <li><i class="fa fa-pencil-square"></i> Update or remove monthly sessions</li>
                            </a>
                        </button>
                    </form>
                </ul>
            </li>
            
            <li><button class="tree_list">Manage Halls</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/adminControllers/aViewHallController.php"><li><i class="fa fa-building"></i> View Halls</li></a>
                    </button>
                    <button>
                        <a href="aAddHallV.php"><li><i class="fa fa-plus-circle"></i> Add a new Hall</li></a>
                    </button>
                    <button>
                        <a href="../../controller/adminControllers/aUpHallController.php"><li><i class="fa fa-pencil-square"></i> Update or remove a Hall</li></a>
                    </button>
                </ul>
            </li>

            <li><button name="manageMedicalSchemes" class="tree_list">Manage Medical Schemes</button>
                <ul class="tree_nest"> 
                    <button>
                        <a href="../../controller/adminControllers/aViewSchemesC.php"><li><i class="fa fa-medkit"></i> View schemes</li></a>
                    </button>
                    <button>
                        <a href="aAddNewSchemeV.php"><li><i class="fa fa-plus-circle"></i> Add a new scheme</li></a>
                    </button>
                    <button>
                        <a href="../../controller/adminControllers/aUpdateSchemeC.php"><li><i class="fa fa-pencil-square"></i> Update a scheme</li></a></button>
                    <button>
                        <a href="../../controller/adminControllers/aRemoveSchemeC.php"><li><i class="fa fa-trash"></i> Remove a scheme</li></a>
                    </button>
                </ul>
            </li>

            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?loguser=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Register to the Staff Medical Scheme</button>
                </a>
            </li>
        </ul>
    </div>

    <script>
        var toggler = document.getElementsByClassName("tree_list");
        var i;

        for (i = 0; i < toggler.length; i++) {
          toggler[i].addEventListener("click", function() {
            this.parentElement.querySelector(".tree_nest").classList.toggle("active");
            this.classList.toggle("tree_list-down");
          });
        }
    </script>
</main>