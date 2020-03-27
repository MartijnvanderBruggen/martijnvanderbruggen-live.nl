<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						
	<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

		<!--Begin::Dashboard 1-->							

		<!--Begin::Row-->
		<div class="row">
			<div class="col-xl-8 col-lg-12 order-lg-3 order-xl-1">				
				@component('components.tickets')
				@endcomponent				
			</div>
			<div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">				
				@component('components.new-users')
				@endcomponent				
			</div>
			<div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">				
				@component('components.daily-sales')
				@endcomponent				
			</div>
			<div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">
				@component('components.profit-share')
				@endcomponent	
			</div>
			<div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">				
				@component('components.revenue-change')
				@endcomponent				
			</div>
			<div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
				@component('components.tasks')
				@endcomponent
			</div>
			<div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
				@component('components.notifications')
				@endcomponent
			</div>
			<div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
				@component('components.support-tickets')
				@endcomponent
			</div>
		</div>

		<!--End::Row-->

		<!--End::Dashboard 1-->
	</div>

	<!-- end:: Content -->
</div>