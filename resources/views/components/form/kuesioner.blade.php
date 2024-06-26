<div class="flex basis-full flex-col rounded-lg border border-gray-200  px-5 py-5 shadow dark:border-gray-700 dark:bg-gray-800">
	<h6 class="font-bold mb-3 text-center text-white">Petunjuk</h6>
	<p class="text-white">Harap mengisi kuesioner di bawah ini dengan menekan emoji/gambar, dimulai dari yang paling kanan <span style="display: inline-block;"><img src="{{ asset('assets/1.svg') }}" width="20" height="20"></span> (Tidak Baik), <span style="display: inline-block;"><img src="{{ asset('assets/2.svg') }}" width="20" height="20"></span> (Kurang Baik), <span style="display: inline-block;"><img src="{{ asset('assets/3.svg') }}" width="20" height="20"></span> (Baik), hingga <span style="display: inline-block;"><img src="{{ asset('assets/4.svg') }}" width="20" height="20"></span> (Sangat Baik). Anda dapat kembali ke kuesioner sebelumnya dan mengubah jawaban dengan menekan tombol panah kiri atau kanan.</p>
</div>
<div class="flex basis-full flex-col items-center space-y-12 rounded-lg border border-gray-200  px-5 py-20 text-center shadow dark:border-gray-700 dark:bg-gray-800">
	<div class="card py-5">
		@php
		for ($i=0; $i < $totalKuesioner; $i++) { 
      if (!isset($data['question'.$i+1])) {
        $selected[$i+1] = 0;
      } else {
        $selected[$i+1] = $data['question'.$i+1];	
      }
    }
	@endphp
		<div class="card-header p-3 pt-2">
			<div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <h1 class="text-white">{{ $question }}</h1>  
                </div>
		  <div class="text-end pt-1">
			<p class="text-xl mb-2 text-capitalize">Bagaimana Pendapat Saudara Tentang </p>
			<h5 class="max-w-3xl text-2xl font-medium tracking-tight text-gray-900 dark:text-white" >{{ $kuesioner->question }}</h5>
		  </div>
		</div>
		<hr class="dark horizontal my-0">
		<div class="card-footer p-3 flex space-x-5" style="justify-content: center">
			@for ($i = 1; $i <= 4; $i++)
			<?php
			  $opacityClass = $selected[$question] == $i ? '' : 'opacity-50';
			?>
			<a href="{{ route('kuesioner', [...$data, ...['question' . $question => $i]]) }}" data-tooltip-target="rate{{ $i }}" data-tooltip-style="light" data-tooltip-placement="bottom" class="{{ $opacityClass }} transform transition duration-100 hover:scale-125 hover:opacity-100">
				<img src="{{ asset('assets/' . $i . '.svg') }}" class="h-12 w-12" >
			</a>
			<div id="rate{{ $i }}" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 opacity-0 shadow-sm">
				{{ rateLabel($i) }}
				<div class="tooltip-arrow" data-popper-arrow></div>
			</div>
		@endfor
		  </div>
	  </div>
	  <div class="flex w-full justify-center">
		<x-link.button :href="$previous" icon="chevron-left" :disabled="$previous === '#' ? true : false"  style=""/>
		<x-link.button href="" :text="$question . ' / ' . $totalKuesioner" class="px-4" />
		<x-link.button :href="$next" icon="chevron-right" :disabled="$next === '#' ? true : false" />
	</div>
</div>
