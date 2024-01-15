<div class="p-4 bg-white border border-neutral-100">
    <form action="{{route('search-'.$fromTable)}}" method="GET" class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 items-end">
        <div class="space-y-2 lg:col-span-2">
            <label for="destination" class="text-sm font-medium">Select Destination</label>
            <input required type="text" name="destination" id="destination" class="bg-neutral-50/50 w-full rounded-md" placeholder="Hotel Name or Location">
        </div>
        <div>
            <button type="submit" class="bg-[#ff5700] py-2.5 w-full text-white font-medium rounded-md">Search</button>
        </div>
    </form>
</div>