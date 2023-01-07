
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                Please Insert All The Customers Details Here

                <form class="mt-10" method="POST" action="{{ route('submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" name="name" class="form-control" id="name" >

                    </div>

                    <div class="mb-3">
                    <label for="birthday">Date of Birth :</label>
                    <input type="date" id="birthday" name="birthday">
                    <input type="submit">

                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="address" name="address" class="form-control" id="address" >

                    </div>

                    <div class="mb-3">
                      <label for="postcode_id" class="form-label">Postcode : </label>
                      <select class="form-control" id="postcode_id" name="postcode_id" required>
                    <option value="" selected>Please select your postcode</option>
                    <option value="35000" >35000</option>
                    <option value="50000">50000</option>
                    <option value="80000">80000</option>
                    </select>

                    </div>

                    <div class="mb-3">
                    <label for="state">State:</label><br>
                    <input type="text" id="#state" name="state" disabled><br>

                    </div>


                    <button type="submit" class="btn" style="background: yellow; text-color:White">Submit</button>
                </form>


                </div>
            </div>
        </div>
    </div>

    <script>

        
       $postcodeToState = {
        "80000": "Johor Bahru",
        "50000": "Wilayah Persekutuan",
        "35000": "Tapah"
        };

        document.getElementById("postcode_id").addEventListener("change", function() {
        const postcode_id = this.value;
        const state =  $postcodeToState[postcode_id];
        if (state) {
            document.getElementById("#state").value = state;
        }
        });

    </script>

    
</x-app-layout>
