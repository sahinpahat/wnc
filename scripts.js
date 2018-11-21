$('document').ready(function(){

	toastr.options = {
	  "closeButton": true,
	  "debug": false,
	  "newestOnTop": false,
	  "progressBar": false,
	  "positionClass": "toast-top-right",
	  "preventDuplicates": false,
	  "onclick": null,
	  "showDuration": "300",
	  "hideDuration": "10000",
	  "timeOut": "5000",
	  "extendedTimeOut": "1000",
	  "showEasing": "swing",
	  "hideEasing": "linear",
	  "showMethod": "fadeIn",
	  "hideMethod": "fadeOut"
	};

	
	
	
	
	$('.addToCart').on('click',function(){

		var btn  = $(this);

		var qty = btn.attr('data-qty');
		var name = btn.attr('data-name');
		var image =btn.attr('data-img');
		var price = btn.attr('data-price');
		var id = btn.attr('data-id');
		// alert(id+name+image+price+qty);
		// exit();

		$.ajax({
			type:"POST",
			url:"ajax.php",
			data:{'type':'add_to_cart',qty:qty,name:name,image:image, price:price,product_id:id},
			
			beforeSend:function(){

				btn.html('...');

			},
			success:function(html){
				
				btn.html('<span id="submit" class="btn-template add"></span>');

				console.log(html);
				toastr["success"](name+ " Added to cart.");

				$('.scounter-wrapper .scounter').html(html);

			},
			error : function(error){

				console.log(error);
			}

		});
		return false;	
	});



	$('.deleteFromCart').on('click',function(){

		var btn  = $(this);

		
		var id = btn.attr('data-id');

		$.ajax({
			type:"POST",
			url:"ajax.php",
			data:{'type':'delete_from_cart',product_id:id},
			
			beforeSend:function(){

				btn.html('...');

			},
			success:function(html){
				
				btn.html('<span class="fa fa-times"></span>');

				// console.log(html);

				var data = $.parseJSON(html);

				$('.counter-wrapper .counter').html(data.items);

				var txt='Your cart is empty';
				if (data.total_amt!=0) {

					txt ='Total Amount  Rs. '+data.total_amt ;
				} 

				$('.total-amt').html(txt);

				$('.row_'+id).hide();

			},
			error : function(error){

				console.log(error);
			}

		});
		return false;	
	});

	$('.qty-up').on('click', function(){

		var qty = Number($('#quantity').val());

		qty+=1;
		$('.addToCart').attr('data-qty',qty);
	});


	$('.qty-down').on('click', function(){

		var qty = Number($('#quantity').val());

		qty-=1;

		if (qty>=1) {
			
			$('.addToCart').attr('data-qty',qty);
		}
	});


});


function chk() {
	var pro_id=document.getElementById('pro_id').value;
	var dataString='pro_id='+pro_id;
	
}