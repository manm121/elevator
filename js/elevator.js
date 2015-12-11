$(function(){

	$.fn.elevator = new elevator({'container':'elevator'});

	function elevator(options){

		var self = this;
		
		//options 
		self.settings ={
			'container':''
		};

		self.settings = $.extend(self.settings, options);

		self.container = $('#'+self.settings.container);

		self.prep = function(){

		};

		self.stopFlag = false;

		self.stop = function(){

			self.stopFlag = true;
		}
		self.motion = function(){

			var capsule = $('.capsule');
		};
		
		self.moveTo = function(loc){

			var capsule = $('.capsule');
			capsule.animate({'margin-top':loc},2000,function(){});
		};

		self.pitStops = function() {

			var stops =[];
			var floor = $('#elevator table tr:even');
			$.each(floor, function(i,j){

				var a = {
							'floor':i,
							'pos':$(j).offset().top,
							'el':$(j)
						}
				stops.push(a);
			});

			return stops;
		};

		//register events 
		self.eventSubscription = function(){

			//trap button clicks
			$('button').on('click',function(){

					var target = $(this);
					var floor = parseInt(target.closest('td').next().html()) - 1;

					var stops = self.pitStops();
					for(var i=0; i<stops.length; i++){

						var _s = stops[i];
						if(_s.floor == floor){

							self.moveTo(_s.pos +'px');
						};
					};
			});

		};

	};
}(jQuery))