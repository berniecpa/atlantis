<?php

$meta_pixel_id=get_settings('meta_pixel');
  
?>

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?php echo $meta_pixel_id ?>');
fbq('track', 'PageView');
fbq('track', 'AddPaymentInfo');
fbq('track', 'AddToCart');
fbq('track', 'AddToWishlist');
fbq('track', 'CompleteRegistration');
fbq('track', 'Contact');
fbq('track', 'CustomizeProduct');
fbq('track', 'Donate');
fbq('track', 'FindLocation');
fbq('track', 'InitiateCheckout');
fbq('track', 'Lead');
fbq('track', 'Schedule');
fbq('track', 'Search');
fbq('track', 'SubmitApplication');
fbq('track', 'ViewContent');
//fbq('track', 'Purchase', {value: 0.00, currency: 'USD'});
//fbq('track', 'StartTrial', {value: '0.00', currency: 'USD', predicted_ltv: '0.00'});
//fbq('track', 'Subscribe', {value: '0.00', currency: 'USD', predicted_ltv: '0.00'});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?php echo $meta_pixel_id?>&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
