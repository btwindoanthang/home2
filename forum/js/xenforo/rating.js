/**
 * @author kier
 */

/** @param {jQuery} $ jQuery Object */
!function($, window, document, _undefined)
{
	XenForo.RatingWidget = function($widget) { this.__construct($widget); };
	XenForo.RatingWidget.prototype =
	{
		__construct: function($widget)
		{
			this.xhr = null;

			this.$widget = $widget.mouseleave($.context(function(e)
			{
				if (this.xhr === null)
				{
					this.resetStars();
				}
			}, this));

			this.$hint = $widget.find('.Hint').each(function()
			{
				var $el = $(this);
				$el.data('text', $el.text());
			});

			this.$currentRating = $widget.find('.RatingValue .Number');

			this.$stars = $widget.find('button').each(function()
			{
				var $el = $(this);
				$el.data('hint', $el.attr('title')).removeAttr('title');
			});

			this.$stars.bind(
			{
				mouseenter: $.context(function(e)
				{
					e.preventDefault();

					var $star = $(e.target);

					this.setStars($star.val());

					this.$hint.text($star.data('hint'));
				}, this),

				click: $.context(function(e)
				{
					e.preventDefault();

					var $star = $(e.target);

					this.xhr = XenForo.ajax
					(
						$widget.attr('action'),
						{ rating: $star.val() },
						$.context(function(ajaxData, textStatus)
						{
							if (!XenForo.hasResponseError(ajaxData))
							{
								XenForo.alert(ajaxData._redirectMessage, '', 1000);

								this.updateRating(ajaxData, true);
							}
							else
							{
								this.resetStars();
							}

							this.xhr = null;
						}, this)
					);
				}, this)
			});
		},

		setStars: function(starValue)
		{
			this.$stars.each(function(i)
			{
				$(this)
					.toggleClass('Full', i < starValue)
					.toggleClass('Half', i + 0.5 == starValue);
			});
		},

		resetStars: function()
		{
			this.setStars(this.$currentRating.text());

			this.$hint.text(this.$hint.data('text'));
		},

		updateRating: function(ajaxData, updateFamily)
		{
			var widgetFamily = this.$widget.data('family');

			if (updateFamily && widgetFamily)
			{
				$('form.RatingWidget').each(function()
				{
					if ($(this).data('family') == widgetFamily)
					{
						$(this).data('XenForo.RatingWidget').updateRating(ajaxData);
					}
				});
			}
			else
			{
				if (ajaxData.newRating)
				{
					this.$currentRating.text(ajaxData.newRating);
				}

				if (ajaxData.hintText)
				{
					this.$hint.data('text', ajaxData.hintText);
				}

				this.resetStars();
			}
		}
	};

	// *********************************************************************

	XenForo.register('form.RatingWidget', 'XenForo.RatingWidget');

}
(jQuery, this, document);