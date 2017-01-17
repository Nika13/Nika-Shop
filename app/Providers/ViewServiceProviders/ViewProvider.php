<?php
namespace App\Providers\ViewServiceProviders;
use Illuminate\Contracts\View\View;
class ViewProvider{
	public function compose(View $view){
		$bg=\Config::get('site.bg');
		$view->with('bg', $bg);
		
		$ads_url=\Config::get('site.ads_url');
		$view->with('ads_url', $ads_url);
	} 
}
