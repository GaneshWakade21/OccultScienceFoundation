<div class=" flex w-full justify-start px-2 items-center py-1 bg-white text-black text-md font-semibold border border-black">Basic Details</div>
     <div class="flex w-full">
        <div class="w-4/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Psychologist Name</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $data['doc_name']; ?></div>
        </div>
        <div class="w-4/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Phone Number</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $data['doc_phone']; ?></div>
        </div>
        <div class="w-8/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-gray-500">Clinic Address</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $data['doc_hospital']; ?></div>
        </div>
       
     </div>