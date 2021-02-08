 myApp.component('myaddress', {
	props:{
		address: Object,
	},
	template:`
 		<!--:for sm ======================================================================== -->	
		<div class=" flex flex-col py-2 border-b   border-green-500 border-opacity-25 relative">
		<!-- ====Name, telephone and email ===================== -->
					 	<button  v-bind:class="{'bg-gray-50 focus:outline-none': !showDetails1,
		       			'bg-lime-50  focus:outline-none  focus:border-wrmGray-300':showDetails1}"
		       			 class=" flex text-left pb-2" @click="showDetails1=!showDetails1">

						 	<div class="flex items-center w-full">
						 	    	<div class="flex-shrink-0 h-12 w-12">
				                      <img class="h-12 w-12 rounded-full" 
				                       v-bind:src ="'../uploads/'+ address.picture" alt=""> 

				                  	</div>
				                  	 <div class="ml-4">
				                    	<div class="text-sm font-medium text-gray-900">
				                    	  {{address.firstname}} {{address.lastname}}
				                    	</div>
				                    	    <div class="text-sm text-gray-500">
				                    	   {{address.phonenumber }}
				                  		  </div>
				                  		  <div class="text-sm text-gray-500">
				                    	   {{address.email }}
				                  		  </div>                  		
				                  	 </div>

				            </div>
				             <p class="px-3 text-blue-500 text-2xl border border-grayy-100 mr-1  rounded-md"> 
		             			 +
		            		</p>
				         </button>
				          <div class="px-2">
				            <p> <span class="font-medium text-sm">  Birthday:</span> 
				            {{new Date(address.birthday).getDay()}}-{{new Date(address.birthday).getMonth()+1}}-{{new Date(address.birthday).getFullYear()}}
				          </div>
			          	<!-- ====Name, telephone and email ===================== -->  
					     <div v-if="showDetails1" class="flex flex-col flex-start p-2 bg-gray-100">			     	
						       <div class="text-sm  text-gray-800">
					            {{address.street}} {{address.housenumber}}
					           </div>
					           <div class="text-sm text-gray-500">
					           {{address.zip }} {{address.city }}
					           </div>
					           <div class="text-sm text-gray-500">
					            {{address.country }}
					           </div> 
					      <!-- end of details -->	
					     </div>

				</div>
			<!-- ======================================================================== -->
	


	<!-- ===================================================================================-->				  
	`,
	data(){
		return {
			showDetails1:false

		}
	}
	})
