<?php 
    require 'top.php';
    if(!isset($_SESSION['email'])) header("location:index.php");
?>
	 
<link rel="stylesheet" type="text/css" media="screen" href="css/ui-lightness/jquery-ui.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/ui.jqgrid.css" />
<script src="js/jqgrid/grid.locale-id.js" type="text/javascript"></script>
<script src="js/jqgrid/jquery.jqGrid.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(function () {
    $("#list").jqGrid({
        url: "example.php",
        datatype: "xml",
        mtype: "GET",
        editurl: "newed.php",
        colNames: ["Tahun", "Nama", "Harga"],
        colModel: [
            {
                name: "tahun", width: 80, align: "right", editable: true,
                editrules:{required: true, number: true}
            },
            { name: "nama_barang", width: 200, editable: true },
            {
            	name: "harga", width: 80, align: "right", editable: true,
            	editrules:{required: true, number: true}
            }
        ],
        pager: jQuery("#pager"),
        rowNum: 20,
        sortname: "id_barang",
        sortorder: "asc",
        viewrecords: true,
        gridview: true,
        autoencode: true,
        caption: "Tabel Harga Barang Eceran",
        height: "100%",
        setGridWidth : '800'
    });
	jQuery("#list").jqGrid('navGrid',
		"#pager",
		{edit:true,add:true,del:true,refresh:false,search:false},
		{height:280}); 
}); 
</script>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
        	<br/>
		    <table id="list"><tr><td></td></tr></table> 
		    <div id="pager"></div>
        </div>
    </div>
</div>

<?php require 'bottom.php' ?>