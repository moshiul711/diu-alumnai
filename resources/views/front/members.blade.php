<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sayidan_h1.kenzap.com/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jun 2018 18:08:10 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="icon" href="favicon.ico" type="image/ico" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/alumni') }}/css/bootstrap.css" />
    <link href="{{ asset('/alumni') }}/css/fresh-bootstrap-table.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/alumni') }}/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/alumni') }}/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/alumni') }}/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/alumni') }}/css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/alumni') }}/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="{{ asset('/alumni') }}/js/libs/modernizr.custom.js"></script>

    <title>Members-Daffodil Alumni Association</title>
</head>
<body>
<div class="main-wrapper">
    <!--Begin header ưrapper-->
@include('front.header')
    <div class="content-wrapper">
        <div class="fresh-table full-color-azure full-screen-table" style="margin-top: 9%">
            <div class="toolbar">
                <button id="alertBtn" class="btn btn-default">Alumni Member Lists</button>
            </div>
            <table id="fresh-table" class="table">
                <thead>
                <th data-field="id">ID</th>
                <th data-field="name" data-sortable="true">Name</th>
                <th data-field="salary" data-sortable="true">Email</th>
                <th data-field="phone" data-sortable="true">Phone</th>
                <th data-field="department" data-sortable="true">Department</th>
                <th data-field="year" data-sortable="true">Graduation Year</th>
                <th data-field="city">Address</th>
                <th data-field="image">image</th>
                </thead>
                <tbody>
                @foreach($members as $member)
                <tr>
                    <td>{{ $member->password }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->phone }}</td>
                    <td>{{ $member->alumni_department }}</td>
                    <td>{{ $member->graduate_year }}</td>
                    <td>{{ $member->address }}</td>
                    <td><img class="img-circle" src="{{ asset('/').$member->image }}" height="80" width="80" alt=""></td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    {{--<div class="newsletter newsletter-parallax" style="margin-top: 2%">--}}
        {{--<div class="container">--}}
                {{--<div class="newsletter-wrapper text-center">--}}
                    {{--<div class="newsletter-title">--}}
                        {{--<h2 class="heading-light">Keep Up and Join Our Newsletter</h2>--}}
                        {{--<p class="text-white">Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>--}}
                    {{--</div>--}}
                    {{--<form name="subscribe-form" target="_blank" class="form-inline">--}}
                        {{--<input type="text" class="form-control text-center form-text-light" name="EMAIL" value="" placeholder="E-mail Address" >--}}
                        {{--<button type="submit" class="button bnt-theme">subscribe</button>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
    {{--</div>--}}
</div>
    <!--End content wrapper-->
    <!--Begin footer wrapper-->
@include('front.footer')
<!--End footer wrapper-->
</div>

<script src="{{ asset('/alumni') }}/js/libs/jquery-2.2.4.min.js"></script>
<script src="{{ asset('/alumni') }}/js/libs/bootstrap.min.js"></script>

<script type="text/javascript" src="{{ asset('/alumni') }}/js/libs/bootstrap-table.js"></script>

<script src="{{ asset('/alumni') }}/js/libs/owl.carousel.min.js"></script>
<script src="{{ asset('/alumni') }}/js/libs/jquery.meanmenu.js"></script>
<script src="{{ asset('/alumni') }}/js/libs/jquery.syotimer.js"></script>
<script src="{{ asset('/alumni') }}/js/libs/parallax.min.js"></script>
<script src="{{ asset('/alumni') }}/js/libs/jquery.waypoints.min.js"></script>
<script src="{{ asset('/alumni') }}/js/custom/main.js"></script>
{{--<script src="{{ asset('/alumni') }}/js/libs/bootstrap-table.js"></script>--}}
<script type="text/javascript">
    var $table = $('#fresh-table'),
        $alertBtn = $('#alertBtn'),
        full_screen = false;

    $().ready(function(){
        $table.bootstrapTable({
            toolbar: ".toolbar",

            showRefresh: true,
            search: true,
            showToggle: true,
            showColumns: true,
            pagination: true,
            striped: true,
            pageSize: 8,
            pageList: [8,10,25,50,100],

            formatShowingRows: function(pageFrom, pageTo, totalRows){
                //do nothing here, we don't want to show the text "showing x of y from..."
            },
            formatRecordsPerPage: function(pageNumber){
                return pageNumber + " rows visible";
            },
            icons: {
                refresh: 'fa fa-refresh',
                toggle: 'fa fa-th-list',
                columns: 'fa fa-columns',
                detailOpen: 'fa fa-plus-circle',
                detailClose: 'fa fa-minus-circle'
            }
        });



        $(window).resize(function () {
            $table.bootstrapTable('resetView');
        });


        window.operateEvents = {
            'click .like': function (e, value, row, index) {
                alert('You click like icon, row: ' + JSON.stringify(row));
                console.log(value, row, index);
            },
            'click .edit': function (e, value, row, index) {
                alert('You click edit icon, row: ' + JSON.stringify(row));
                console.log(value, row, index);
            },
            'click .remove': function (e, value, row, index) {
                $table.bootstrapTable('remove', {
                    field: 'id',
                    values: [row.id]
                });

            }
        };

        $alertBtn.click(function () {
            alert("You pressed on Alert");
        });

    });


    function operateFormatter(value, row, index) {
        return [
            '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
            '<i class="fa fa-heart"></i>',
            '</a>',
            '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
            '<i class="fa fa-edit"></i>',
            '</a>',
            '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
            '<i class="fa fa-remove"></i>',
            '</a>'
        ].join('');
    }


</script>
<script type="text/javascript">

    jQuery(document).ready(function () {
        $('#time').syotimer({
            year: 2016,
            month: 12,
            day: 7,
            hour: 7,
            minute: 7,
        });
    });
</script>
</body>

<!-- Mirrored from sayidan_h1.kenzap.com/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jun 2018 18:08:10 GMT -->
</html>