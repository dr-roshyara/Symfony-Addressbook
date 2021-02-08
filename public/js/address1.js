 myApp.component('myaddress1', {
	props:{ 
		address: Object
	},
	template:`		    
         <tr class="border border-green-500 border-opacity-25">
         <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" 
                    v-bind:src ="'../uploads/'+ address.picture" alt=""> 
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      {{address.firstname}} {{address.lastname}}
                    </div>
                    
                  </div>
                </div>
            </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{address.street }} {{address.housenumber}} </div>
                <div class="text-sm text-gray-500"> {{ address.zip}} {{ address.city}} </div>
                <div class="text-sm text-gray-500"> {{ address.country}} </div>

              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                 <div class="text-sm text-gray-900">{{address.email }} </div>
                <div class="text-sm text-gray-500"> {{ address.phonenumber}} </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
               <div class="text-sm text-gray-900">
               {{new Date(address.birthday).getDay()}}-{{new Date(address.birthday).getMonth()+1}}-{{new Date(address.birthday).getFullYear()}}
			  </div>      
              </td>
       </tr>
    <!-- ===================================================================================-->				  
	`,
	data(){
		return {
			showDetails1:false

		}
	}
	})
