
myApp.component('addressbook', {
	props:{
		addresses: Object,
		name: String,
		zip: String,
		city: String 		
	},
	template: `
	<!-- //<div class="px-2" v-for="address in addresses"> -->
	<div class="px-2" v-for="address in filteredList">
		<myaddress class="block sm:hidden" :address="address"></myaddress>
		  
	</div>
	<!-- for md: =================================================================== -->
	<div class="hidden sm:block flex flex-col">
		 	 <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
		    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
		      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
		        <table class="min-w-full divide-y divide-gray-200">
		          <thead class="bg-gray-50 ">
		            <tr>
		              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
		                Name
		              </th>
		              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
		                Address
		              </th>
		              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
		                Contact 
		              </th>
		              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
		                Birthday
		              </th>
		            
		            </tr>
		          </thead>
					<tbody v-for="address in filteredList"
					 class="bg-white divide-y divide-gray-200">
          			  <myaddress1 :address="address"> </myaddress1>          	
          		<!-- More items... -->
          		</tbody>	
				   </table>
			      </div>
			    </div>
			  </div>
			</div>
			</div>	
	 <!-- ==================================================== -->
	`,
	data(){
		return{
			showDetails1:false
		}
		
	},
	 computed: {
    filteredList() {
      
	  return this.addresses.filter(address => {
		 var tfvalue 	=true;
		 var curName 	=address.firstname+' '+address.lastname;
		 var filterName	=this.name; 
		 var curZip 	=address.zip
		 var filterZip	=this.zip; 
		  var curCity 	=address.city;
		 var filterCity	=this.city; 
		 if(filterName!=''){
			tfvalue =tfvalue & (curName.toLowerCase().includes(filterName.toLowerCase()))
		}
		 if(filterCity!=''){
			tfvalue =tfvalue & (curCity.toLowerCase().includes(filterCity.toLowerCase()))
		}
		if(filterZip!=''){
			tfvalue =tfvalue & (curZip.toLowerCase().includes(filterZip.toLowerCase()))
		}

		return tfvalue;
	   
		
      })
	  
    }
  }
	
})
