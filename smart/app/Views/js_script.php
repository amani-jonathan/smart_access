<script type="text/javascript">
	
	//add_form() used to show the modal form
	function add_form()
	{		
		$('.submit').removeClass('disabled').attr('disabled', false)
		$('.modal_form')[0].reset(); // reset form on modals
		$('#BtnEnregistrer').html(' Enregistrer');
	  	$('#BtnEnregistrer').attr('value', "Enregistrer");

	  	$('.panel-modal').modal('show');
	  	
		$(".submit").attr('disabled', false);  
	}   

	function edit_service(id)
	{	
		$('#BtnEnregistrer').html(' Modifier ')
		$('.modal_form')[0].reset(); // reset form on modals
		$('#BtnEnregistrer').attr('value', "modifier");
		
		//Ajax Load data from ajax
		$.ajax({
		url : "<?= site_url('edit_service')?>/" + id,
		type: "GET",
		dataType: "JSON",
		success: function(data)
		{	
		    $('[name="id"]').val(data.id);
			$('[name="libelle"]').val(data.libelle); 
					 
			$('.submit').removeClass('disabled').attr('disabled', false);
			$('.panel-modal').modal('show'); 
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
		    alert('Error get data from ajax');
		}
		});
	}

	function edit_type(id)
	{	
		$('#BtnEnregistrer').html(' Modifier ')
		$('.modal_form')[0].reset(); // reset form on modals
		$('#BtnEnregistrer').attr('value', "modifier");
		
		//Ajax Load data from ajax
		$.ajax({
		url : "<?= site_url('edit_type')?>/" + id,
		type: "GET",
		dataType: "JSON",
		success: function(data)
		{	
		    $('[name="id"]').val(data.id);
			$('[name="libelle"]').val(data.libelle); 
			$('[name="service"]').val(data.service); 
					 
			$('.submit').removeClass('disabled').attr('disabled', false);
			$('.panel-modal').modal('show'); 
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
		    alert('Error get data from ajax');
		}
		});
	}

	function delete_service(id)
	{
		var url = window.location.href;

	    swal({
		    title: "Supprimer ?",
			text: "La suppression sera definitive.",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Oui",
			cancelButtonText: "Non",
			showLoaderOnConfirm:true
	    }, function() {
	        		$.ajax({
	                    url : "<?= site_url('delete_service')?>/"+id,
			            type: "GET",
			            dataType: "JSON",
	                    success: function(data){
	                  
	                   		 swal(
								"Supprimé !",
								"Suppression effectu\351ee avec succ\350s.",
								"success");					

							document.location.href=""+url;				
	                    },
			        error: function (jqXHR, textStatus, errorThrown)
			        {
			            alert('Erreur lors de la suppression de la donn\351ee. Suppression impossible');
			           
			        }
	                });
	      
	    });
	}

	function delete_type(id)
	{
		var url = window.location.href;

	    swal({
		    title: "Supprimer ?",
			text: "La suppression sera definitive.",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Oui",
			cancelButtonText: "Non",
			showLoaderOnConfirm:true
	    }, function() {
	        		$.ajax({
	                    url : "<?= site_url('delete_type')?>/"+id,
			            type: "GET",
			            dataType: "JSON",
	                    success: function(data){
	                  
	                   		 swal(
								"Supprimé !",
								"Suppression effectu\351ee avec succ\350s.",
								"success");					

							document.location.href=""+url;				
	                    },
			        error: function (jqXHR, textStatus, errorThrown)
			        {
			            alert('Erreur lors de la suppression de la donn\351ee. Suppression impossible');
			           
			        }
	                });
	      
	    });
	}
 
    function UrlExists(url)
	{
		var http = new XMLHttpRequest();
		http.open('HEAD', url, false);
		http.send();
		return http.status !=404;
	}

	function formatDate (input) 
	{
		var datePart = input.match(/\d+/g),
		year = datePart[0].substring(2), // get only two digits
		month = datePart[1], day = datePart[2];

		return day+'/'+month+'/'+year;
	}

	function format(inputDate) 
	{
	    var date = new Date(inputDate);
	    if (!isNaN(date.getTime())) {
	        var day = date.getDate().toString();
	        var month = (date.getMonth() + 1).toString();
	        // Months use 0 index.

	        return (day[1] ? day : '0' + day[0]) + '/' +
	           (month[1] ? month : '0' + month[0]) + '/' + 
	           date.getFullYear()
	    }
	}
	
			
</script>



