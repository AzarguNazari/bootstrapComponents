<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Components</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Theme CSS -->
        <link type="text/css" href="assets/bootstrap4x/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link rel="stylesheet" href="assets/bootstrap4x/css/main.css">
    </head>
    <body>
        <h3 class="text-center my-4 display-2">Bootstrap Components</h3>
        <div class="container-fluid">
            <div class="row container my-2">
                <div class="">
                    <input type="search" id="search" class="search" placeholder="Searach">
                    <button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sort Ascending Order"><i class="fa fa-sort-alpha-asc" onclick="sortTab()"></i></button>
                </div>
            </div>
            <div class="row">
                <div class="col-3 mx-3 rounded py-2" style="min-height: 800px; background-color: #eee;">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#layout" role="tab" aria-controls="v-pills-home" aria-selected="true">Layout</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#grid" role="tab" aria-controls="v-pills-profile" aria-selected="false">Grid</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#content" role="tab" aria-controls="v-pills-profile" aria-selected="false">Content</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#image" role="tab" aria-controls="v-pills-profile" aria-selected="false">Image</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#table" role="tab" aria-controls="v-pills-profile" aria-selected="false">Table</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#alert" role="tab" aria-controls="v-pills-profile" aria-selected="false">Alert</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#budge" role="tab" aria-controls="v-pills-profile" aria-selected="false">Budge & Breadcrumb</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Button</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#card" role="tab" aria-controls="v-pills-profile" aria-selected="false">Card</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#carousel" role="tab" aria-controls="v-pills-profile" aria-selected="false">Carousel</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#collapse" role="tab" aria-controls="v-pills-profile" aria-selected="false">Collapse</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#dropdown" role="tab" aria-controls="v-pills-profile" aria-selected="false">DropDown</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#form" role="tab" aria-controls="v-pills-profile" aria-selected="false">Form</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#jumborton" role="tab" aria-controls="v-pills-profile" aria-selected="false">Jumborton</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#listGroup" role="tab" aria-controls="v-pills-profile" aria-selected="false">List Group</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#mediaObject" role="tab" aria-controls="v-pills-profile" aria-selected="false">Media Object</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#modal" role="tab" aria-controls="v-pills-profile" aria-selected="false">Modal</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#nav" role="tab" aria-controls="v-pills-profile" aria-selected="false">Nav Bar</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#pagination" role="tab" aria-controls="v-pills-profile" aria-selected="false">Pagination</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#popover" role="tab" aria-controls="v-pills-profile" aria-selected="false">Popover</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#progress" role="tab" aria-controls="v-pills-profile" aria-selected="false">Progress</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#scrollspy" role="tab" aria-controls="v-pills-profile" aria-selected="false">ScrollSpy</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#spinners" role="tab" aria-controls="v-pills-profile" aria-selected="false">Spinners</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#toasts" role="tab" aria-controls="v-pills-profile" aria-selected="false">Toasts</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#tooltips" role="tab" aria-controls="v-pills-profile" aria-selected="false">Tooltips</a>
                    </div>
                </div>
                <div class="col m-1 rounded text-light mr-2" style="background-color: orange">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active py-2" id="layout" role="tabpanel" aria-labelledby="v-pills-home-tab"></div>
                        <div class="tab-pane fade py-2" id="grid" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="content" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="image" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="table" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="alert" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="budge" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="button" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="card" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="carousel" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="collapse" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="dropdown" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="form" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="jumborton" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="listGroup" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="mediaObject" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="modal" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="nav" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="pagination" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="popover" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="progress" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="scrollspy" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="spinners" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="toasts" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                        <div class="tab-pane fade py-2" id="tooltips" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel">Error</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            There's some problem in loading content
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core -->
        <script src="assets/bootstrap4x/js/jquery.js"></script>
        <script src="assets/bootstrap4x/js/popper.js"></script>
        <script src="assets/bootstrap4x/js/bootstrap.min.js"></script>

        <script>

            $(document).ready(function () {


                $.each($("#v-pills-tabContent > div"), function () {
                    $(this).load("assets/components/" + $(this).attr("id") + ".html", function (response, status, xhr) {
                        if (status == "error") {
                            //$("#exampleModal").modal('show');
                        }
                    });
                });

                $(".nav-link").append(function () {
                    return "<span class='badge badge-dark'><i class='fa fa-arrow-right'></i></span>";
                });

                $("#search").keyup(function () {
                    const keyword = $(this).val().toLowerCase().trim();
                    $("#v-pills-tab a").hide();
                    $("#v-pills-tab a").filter(function () {
                        return $(this).text().trim().toLowerCase().indexOf(keyword) >= 0;
                    }).show();
                });
            });



            function sortTab() {
                const allElements = [];
                $.each($("#v-pills-tab a"), function(){
                    allElements.push($(this));
                });
                allElements.sort(function(a,b){
                    const x = a.text();
                    const y = b.text();
                    return -((x > y) ? -1 : ((x < y) ? 1 : 0));
                });
                
                $("#v-pills-tab a").remove();
                 
                $.each(allElements, function(){
                    $("#v-pills-tab").append($(this).removeClass("active"));
                });
                
                $("#v-pills-tab a").first().addClass("active");
            }
        </script>


    </body>
</html>