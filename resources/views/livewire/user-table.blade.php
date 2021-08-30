<div class="container mx-auto  p-10">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table wire:loading.delay.class="opacity-50" class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Sign up date
                            </th>

                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                       @foreach($users as $user)
                           <tr @if($loop->last) id="last_record" @endif>
                               <td class="px-6 py-4 whitespace-nowrap">
                                   <div class="flex items-center">
                                       <div class="flex-shrink-0 h-10 w-10">
                                           <img class="h-10 w-10 rounded-full"
                                                src="{{asset('images/smiley.png')}}"
                                                alt="">
                                       </div>
                                       <div class="ml-4">
                                           <div class="text-sm font-medium text-gray-900">
                                               {{$user->name}}
                                           </div>

                                       </div>
                                   </div>
                               </td>
                               <td class="px-6 py-4 whitespace-nowrap">
                                   <div class="text-sm text-gray-900"> {{$user->email}}</div>

                               </td>
                               <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                   {{$user->created_at->diffForHumans()}}
                </span></td>

                           </tr>
                       @endforeach

                        <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @if($loadAmount >= $totalRecords)
            <p class="text-red-800 font-bold text-2xl text-center my-10" >No Remaining Records!</p>
        @endif

        <script>
            const lastRecord = document.getElementById('last_record')
            const options = {
                root:null,
                threshold:1,
                rootMargin:'0px'
            }
            const observer =  new IntersectionObserver((entries, observer)=>{
                entries.forEach(entry => {
                    if(entry.isIntersecting){
                        @this.loadMore()
                    }
                })
            })

            observer.observe(lastRecord)
        </script>
    </div>
