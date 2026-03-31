<?php
/**
 * Template Name: Services
 */
$is_en = hotel_is_en();
$lang = $is_en ? 'en' : 'ja';
$is_en ? get_header('en') : get_header();

$kv_heading  = get_field('kv_heading') ?: 'SERVICE';
$kv_image    = get_field('kv_image');
$intro_text  = get_field('intro_text') ?: '';
$cover_image = get_field('cover_image');

// Service data
$s = array();
for ($i = 1; $i <= 3; $i++) {
    $s[$i] = array(
        'label' => get_field('service_' . $i . '_label') ?: '',
        'title' => get_field('service_' . $i . '_title') ?: '',
        'desc'  => get_field('service_' . $i . '_description') ?: '',
        'main'  => get_field('service_' . $i . '_main_image'),
        'sub'   => get_field('service_' . $i . '_sub_image'),
    );
}

// Option data
$opt = array();
for ($i = 1; $i <= 3; $i++) {
    $opt[$i] = array(
        'title' => get_field('option_' . $i . '_title') ?: '',
        'desc'  => get_field('option_' . $i . '_description') ?: '',
        'image' => get_field('option_' . $i . '_image'),
    );
}
$opt_heading    = get_field('option_heading') ?: 'OPTION';
$opt_subtitle   = get_field('option_subtitle');
$opt_detail_text = get_field('option_detail_text') ?: ($is_en ? 'View option details' : 'オプションの詳細はこちら');
$opt_detail_url  = get_field('option_detail_url') ?: '/service-option-detail';
$rsv_subtitle   = get_field('rsv_subtitle');
$rsv_text       = get_field('rsv_text') ?: ($is_en ? "Check availability and book easily online.\nEnjoy a special time with us." : "オンラインで簡単に\n空室確認・ご予約が可能です。\n特別なひとときをお過ごしください。");
$rsv_btn_text   = get_field('rsv_btn_text') ?: ($is_en ? 'BOOK YOUR STAY' : 'ご予約はこちら');
$rsv_btn_url    = get_field('rsv_btn_url') ?: '/404';

// Image helpers
$s1_main_src = $s[1]['main'] ? esc_url($s[1]['main']['url']) : hotel_asset('images/services/sauna-main.jpg');
$s1_sub_src  = $s[1]['sub']  ? esc_url($s[1]['sub']['url'])  : hotel_asset('images/services/sauna-sub.jpg');
$s2_main_src = $s[2]['main'] ? esc_url($s[2]['main']['url']) : hotel_asset('images/services/onsen-main.jpg');
$s2_sub_src  = $s[2]['sub']  ? esc_url($s[2]['sub']['url'])  : hotel_asset('images/services/onsen-sub.jpg');
$s3_main_src = $s[3]['main'] ? esc_url($s[3]['main']['url']) : hotel_asset('images/services/food-main.jpg');
$s3_sub_src  = $s[3]['sub']  ? esc_url($s[3]['sub']['url'])  : hotel_asset('images/services/food-sub.jpg');

$opt1_src = $opt[1]['image'] ? esc_url($opt[1]['image']['url']) : hotel_asset('images/services/option-1.jpg');
$opt2_src = $opt[2]['image'] ? esc_url($opt[2]['image']['url']) : hotel_asset('images/services/option-2.jpg');
$opt3_src = $opt[3]['image'] ? esc_url($opt[3]['image']['url']) : hotel_asset('images/services/option-3.jpg');

$s1_main_alt = $s[1]['title'] ?: ($is_en ? 'Private Sauna' : 'プライベートサウナ');
$s2_main_alt = $s[2]['title'] ?: ($is_en ? 'Onsen' : '温泉');
$s3_main_alt = $s[3]['title'] ?: ($is_en ? 'Dining' : 'お食事');

$label_vis = $s[1]['label'] ? '' : ' invisible';
$label2_vis = $s[2]['label'] ? '' : ' invisible';
$label3_vis = $s[3]['label'] ? '' : ' invisible';

$cover_src = $cover_image ? esc_url($cover_image['url']) : hotel_asset('images/services/service-cover.jpg');
$kv_src    = $kv_image ? esc_url($kv_image['url']) : hotel_asset('images/services/service-kv.jpg');
?>

<!-- KV -->
<section class="relative h-[380px] lg:h-[640px] overflow-hidden">
  <img src="<?php echo $kv_src; ?>" alt="" class="absolute service-kv-img kv-fade-bg max-w-none object-cover" />
  <div class="absolute inset-0 bg-[#483F38] kv-fade-overlay"></div>
  <div class="absolute inset-0 flex items-center justify-center">
    <h1 class="text-[32px] lg:text-[32px] leading-[48px] tracking-[4.8px] text-white/85 font-['Shippori_Mincho'] translate-y-[20.5px] lg:translate-y-0">
      <?php echo esc_html($kv_heading); ?>
    </h1>
  </div>
</section>

<!-- Service Text -->
<?php if ($intro_text) : ?>
<section class="bg-[#F5EFEA] px-[16px] py-[80px] lg:px-[16px] xl:px-[256px] lg:py-[150px]">
  <div class="mx-auto w-full lg:max-w-[calc(100%-32px)] xl:max-w-[928px] text-center text-[15px] leading-[33px] tracking-[1.6px] text-[#483F38] font-['Shippori_Mincho'] lg:text-[16px] lg:leading-[48px] whitespace-pre-line">
<?php echo esc_html($intro_text); ?>
  </div>
</section>
<?php endif; ?>

<!-- Cover Image -->
<section class="relative h-[192px] lg:h-[501px] overflow-hidden">
  <img src="<?php echo $cover_src; ?>" alt="" class="fade-target service-cover-img absolute max-w-none object-cover" />
</section>

<!-- Service Main -->
<section class="bg-white px-[16px] pt-[80px] pb-[40px] lg:px-[16px] xl:px-[16px] min-[1540px]:px-0 lg:py-[150px]">
  <div class="mx-auto w-full lg:max-w-[calc(100%-32px)] xl:max-w-[calc(100%-32px)] 2xl:max-w-[1232px] space-y-0 lg:space-y-[120px]">
    <!-- Service 1 -->
    <div>
      <div class="lg:hidden w-full pb-[40px]">
        <div class="flex flex-col text-left">
          <div>
            <p class="flex h-[21px] items-center text-[12px] leading-[48px] tracking-[4.8px] text-[#B99563] font-['Shippori_Mincho']<?php echo $label_vis; ?>"><?php echo esc_html($s[1]['label'] ?: 'PRIVATE SAUNA'); ?></p>
            <h3 class="mt-[8px] flex h-[52px] items-center text-[24px] leading-[32px] tracking-[2.4px] text-[#483F38] font-medium font-['Shippori_Mincho']"><?php echo esc_html($s1_main_alt); ?></h3>
          </div>
          <?php if ($s[1]['desc']) : ?>
          <p class="mt-[16px] text-[14px] leading-[30px] tracking-[1.4px] text-[#483F38] font-['Shippori_Mincho'] whitespace-pre-line"><?php echo esc_html($s[1]['desc']); ?></p>
          <?php endif; ?>
        </div>
        <div class="fade-target mt-[40px] sauna-images-sp">
          <div class="sauna-main-window">
            <img src="<?php echo $s1_main_src; ?>" alt="<?php echo esc_attr($s1_main_alt); ?>" class="sauna-main-sp-img" />
          </div>
          <div class="sauna-sub-window">
            <img src="<?php echo $s1_sub_src; ?>" alt="" class="sauna-sub-sp-img" />
          </div>
        </div>
      </div>

      <div class="hidden lg:flex lg:flex-row lg:items-center lg:gap-[100px] service-pc-row">
        <div class="fade-target sauna-main h-[292px] w-full lg:h-[813px] lg:w-[480px] xl:w-[563px] lg:flex-shrink-0 service-pc-media">
          <img src="<?php echo $s1_main_src; ?>" alt="<?php echo esc_attr($s1_main_alt); ?>" class="sauna-main-img" />
        </div>
        <div class="lg:w-[420px] xl:w-[569px] flex flex-col service-pc-text">
          <div>
            <p class="flex h-[21px] items-center text-[12px] leading-[48px] tracking-[4.8px] text-[#B99563] font-['Shippori_Mincho']<?php echo $label_vis; ?>"><?php echo esc_html($s[1]['label'] ?: 'PRIVATE SAUNA'); ?></p>
            <h3 class="mt-[8px] flex h-[52px] items-center text-[24px] leading-[32px] tracking-[2.4px] text-[#483F38] font-medium font-['Shippori_Mincho']"><?php echo esc_html($s1_main_alt); ?></h3>
          </div>
          <?php if ($s[1]['desc']) : ?>
          <p class="mt-[24px] text-[14px] leading-[30px] tracking-[1.4px] text-[#475569] font-['Shippori_Mincho'] lg:w-full xl:w-[569px] whitespace-pre-line"><?php echo esc_html($s[1]['desc']); ?></p>
          <?php endif; ?>
        </div>
      </div>

      <div class="hidden lg:block lg:mt-[40px] lg:ml-auto lg:w-[476px]">
        <div class="fade-target sauna-sub h-[220px] w-full lg:h-[369px]">
          <img src="<?php echo $s1_sub_src; ?>" alt="" class="sauna-sub-img" />
        </div>
      </div>
    </div>

    <!-- Service 2 -->
    <div>
      <div class="lg:hidden pt-[40px] pb-0">
        <div class="w-full flex flex-col text-left">
          <div>
            <p class="flex h-[21px] items-center text-[12px] leading-[48px] tracking-[4.8px] text-[#B99563] font-['Shippori_Mincho']<?php echo $label2_vis; ?>"><?php echo esc_html($s[2]['label'] ?: 'ONSEN'); ?></p>
            <h3 class="mt-[8px] flex h-[52px] items-center text-[24px] leading-[32px] tracking-[2.4px] text-[#483F38] font-medium font-['Shippori_Mincho']"><?php echo esc_html($s2_main_alt); ?></h3>
          </div>
          <?php if ($s[2]['desc']) : ?>
          <p class="mt-[16px] text-[14px] leading-[30px] tracking-[1.4px] text-[#483F38] font-['Shippori_Mincho'] whitespace-pre-line"><?php echo esc_html($s[2]['desc']); ?></p>
          <?php endif; ?>
        </div>
        <div class="fade-target mt-[87px] onsen-images-sp mx-auto">
          <div class="onsen-main-window">
            <img src="<?php echo $s2_main_src; ?>" alt="<?php echo esc_attr($s2_main_alt); ?>" class="onsen-main-sp-img" />
          </div>
          <div class="onsen-sub-window">
            <img src="<?php echo $s2_sub_src; ?>" alt="" class="onsen-sub-sp-img" />
          </div>
        </div>
      </div>

      <div class="hidden lg:flex lg:flex-row lg:items-center lg:gap-[100px] service-pc-row">
        <div class="lg:w-[360px] xl:w-[435px] flex flex-col service-pc-text">
          <div>
            <p class="flex h-[21px] items-center text-[12px] leading-[48px] tracking-[4.8px] text-[#B99563] font-['Shippori_Mincho']<?php echo $label2_vis; ?>"><?php echo esc_html($s[2]['label'] ?: 'ONSEN'); ?></p>
            <h3 class="mt-[8px] flex h-[52px] items-center text-[24px] leading-[32px] tracking-[2.4px] text-[#483F38] font-medium font-['Shippori_Mincho']"><?php echo esc_html($s2_main_alt); ?></h3>
          </div>
          <?php if ($s[2]['desc']) : ?>
          <p class="mt-[24px] text-[14px] leading-[30px] tracking-[1.4px] text-[#475569] font-['Shippori_Mincho'] lg:w-full xl:w-[398px] whitespace-pre-line"><?php echo esc_html($s[2]['desc']); ?></p>
          <?php endif; ?>
        </div>
        <div class="fade-target onsen-main h-[292px] w-full lg:h-[773px] lg:w-[520px] xl:w-[768px] lg:flex-shrink-0 service-pc-media">
          <img src="<?php echo $s2_main_src; ?>" alt="<?php echo esc_attr($s2_main_alt); ?>" class="onsen-main-img" />
        </div>
      </div>
      <div class="hidden lg:block lg:mt-[40px] lg:ml-0 lg:w-[495px]">
        <div class="fade-target onsen-sub h-[220px] w-full lg:h-[346px]">
          <img src="<?php echo $s2_sub_src; ?>" alt="" class="onsen-sub-img" />
        </div>
      </div>
    </div>

    <!-- Service 3 -->
    <div class="lg:pt-[160px]">
      <div class="lg:hidden pt-[46px] pb-0">
        <div class="w-full flex flex-col text-left">
          <div>
            <p class="flex h-[21px] items-center text-[12px] leading-[48px] tracking-[4.8px] text-[#B99563] font-['Shippori_Mincho']<?php echo $label3_vis; ?>"><?php echo esc_html($s[3]['label'] ?: 'FOOD'); ?></p>
            <h3 class="mt-[8px] flex h-[52px] items-center text-[24px] leading-[32px] tracking-[2.4px] text-[#483F38] font-medium font-['Shippori_Mincho']"><?php echo esc_html($s3_main_alt); ?></h3>
          </div>
          <?php if ($s[3]['desc']) : ?>
          <p class="mt-[16px] text-[14px] leading-[30px] tracking-[1.4px] text-[#483F38] font-['Shippori_Mincho'] whitespace-pre-line"><?php echo esc_html($s[3]['desc']); ?></p>
          <?php endif; ?>
        </div>
        <div class="fade-target mt-[40px] pt-[33px] food-images-sp mx-auto">
          <div class="food-main-window">
            <img src="<?php echo $s3_main_src; ?>" alt="<?php echo esc_attr($s3_main_alt); ?>" class="food-main-sp-img" />
          </div>
          <div class="food-sub-window">
            <img src="<?php echo $s3_sub_src; ?>" alt="" class="food-sub-sp-img" />
          </div>
        </div>
      </div>

      <div class="hidden lg:flex lg:flex-row lg:items-center lg:gap-[100px] service-pc-row">
        <div class="fade-target food-main h-[292px] w-full lg:h-[703px] lg:w-[480px] xl:w-[612px] lg:flex-shrink-0 service-pc-media">
          <img src="<?php echo $s3_main_src; ?>" alt="<?php echo esc_attr($s3_main_alt); ?>" class="food-main-img" />
        </div>
        <div class="lg:w-[420px] xl:w-[569px] flex flex-col service-pc-text">
          <div>
            <p class="flex h-[21px] items-center text-[12px] leading-[48px] tracking-[4.8px] text-[#B99563] font-['Shippori_Mincho']<?php echo $label3_vis; ?>"><?php echo esc_html($s[3]['label'] ?: 'FOOD'); ?></p>
            <h3 class="mt-[8px] flex h-[52px] items-center text-[24px] leading-[32px] tracking-[2.4px] text-[#483F38] font-medium font-['Shippori_Mincho']"><?php echo esc_html($s3_main_alt); ?></h3>
          </div>
          <?php if ($s[3]['desc']) : ?>
          <p class="mt-[24px] text-[14px] leading-[30px] tracking-[1.4px] text-[#475569] font-['Shippori_Mincho'] lg:w-full xl:w-[569px] whitespace-pre-line"><?php echo esc_html($s[3]['desc']); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <div class="hidden lg:block lg:mt-[40px] lg:ml-auto lg:w-[447px]">
        <div class="fade-target food-sub h-[220px] w-full lg:h-[436px]">
          <img src="<?php echo $s3_sub_src; ?>" alt="" class="food-sub-img" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Option -->
<section class="bg-[#F5EFEA] px-[16px] py-[80px] lg:px-[16px] min-[1400px]:px-[232px] lg:pt-[70px] lg:pb-[150px]">
  <div class="mx-auto w-full space-y-[40px] lg:w-full lg:max-w-[calc(100%-32px)] min-[1400px]:max-w-[976px] lg:space-y-[80px]">
    <div class="text-center space-y-[16px] text-[#436C5E] font-['Shippori_Mincho'] lg:-mt-[10px]">
      <p class="text-[32px] leading-[40px] tracking-[3.6px] font-medium"><?php echo esc_html($opt_heading); ?></p>
      <p class="text-[14px] leading-[20px] tracking-[1.4px]<?php echo $opt_subtitle ? '' : ' invisible'; ?>"><?php echo esc_html($opt_subtitle ?: ($is_en ? 'Add special experiences' : '特別な体験をプラスする')); ?></p>
    </div>

    <div class="flex flex-col items-center gap-[32px] lg:flex-row lg:items-stretch lg:justify-center">
      <?php
      $opt_defaults = array(
        1 => array('src' => $opt1_src, 'alt' => $opt[1]['title'] ?: ($is_en ? 'Onsen' : '温泉'), 'cls' => '1'),
        2 => array('src' => $opt2_src, 'alt' => $opt[2]['title'] ?: ($is_en ? 'Private BBQ' : 'プライベートBBQ'), 'cls' => '2'),
        3 => array('src' => $opt3_src, 'alt' => $opt[3]['title'] ?: ($is_en ? 'Fat Bike Rental' : 'ファットバイクのレンタル'), 'cls' => '3'),
      );
      foreach ($opt_defaults as $i => $od) :
        $title = $opt[$i]['title'] ?: $od['alt'];
        $desc  = $opt[$i]['desc'];
      ?>
      <div class="w-full overflow-hidden rounded-[8px] bg-white lg:w-[304px] lg:h-[510px] flex flex-col">
        <div class="option-img option-img-<?php echo $od['cls']; ?> h-[256px] w-full">
          <img src="<?php echo $od['src']; ?>" alt="<?php echo esc_attr($title); ?>" class="option-img-inner option-img-inner-<?php echo $od['cls']; ?>" />
        </div>
        <div class="px-[26px] py-[32px] lg:h-[222px]">
          <p class="text-center text-[16px] leading-[48px] tracking-[1.6px] text-[#483F38] font-['Shippori_Mincho']"><?php echo esc_html($title); ?></p>
          <?php if ($desc) : ?>
          <p class="mt-[16px] w-full text-left text-[14px] leading-[22.75px] tracking-[2.1px] text-[#475569] font-['Shippori_Mincho'] lg:w-[252px]">
            <?php echo esc_html($desc); ?>
          </p>
          <?php endif; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="flex justify-center">
      <a href="<?php echo esc_url($opt_detail_url); ?>" class="inline-flex h-[43px] w-[290px] items-center justify-center rounded-full border border-transparent bg-[#436C5E] text-[14px] leading-[22.75px] tracking-[2.1px] text-white font-['Shippori_Mincho'] hover:bg-[#3b5e52] transition-colors lg:h-auto lg:w-auto lg:px-[24px] lg:py-[12px]">
        <?php echo esc_html($opt_detail_text); ?>
      </a>
    </div>
  </div>
</section>

<!-- Reservation -->
<section class="relative lg:py-[150px] lg:px-[16px] xl:px-[272px] py-[80px] px-[16px]">
  <div class="absolute inset-0 overflow-hidden">
    <img src="<?php echo hotel_asset('images/reservation-bg.jpg'); ?>" alt="" class="hidden lg:block absolute inset-0 w-full h-full object-cover" data-no-fade />
    <img src="<?php echo hotel_asset('images/reservation-bg.jpg'); ?>" alt="" class="lg:hidden absolute inset-0 w-full h-full object-cover object-[position:34.8%_0%]" data-no-fade />
  </div>
  <div class="absolute inset-0 bg-black/16 mix-blend-multiply"></div>
  <div class="relative z-10 w-full">
    <div class="flex flex-col lg:gap-[32px] gap-[32px] items-center">
      <div class="text-center space-y-[8px]">
        <h2 class="lg:text-[32px] lg:leading-[54px] lg:tracking-[3.6px] text-[32px] leading-[54px] tracking-[3.6px] font-medium text-white font-['Shippori_Mincho']">RESERVATION</h2>
        <p class="text-[14px] leading-[20px] tracking-[1.4px] text-[#CBD5E1] font-['Shippori_Mincho']<?php echo $rsv_subtitle ? '' : ' invisible'; ?>"><?php echo esc_html($rsv_subtitle ?: 'RESERVATION'); ?></p>
      </div>
      <div class="lg:text-[16px] lg:leading-[32px] text-[15px] leading-[27px] tracking-[1.6px] text-[#E2E8F0] font-['Shippori_Mincho'] text-center whitespace-pre-line lg:max-w-[896px] max-w-full"><?php echo esc_html($rsv_text); ?></div>
      <div class="flex justify-center">
        <a href="<?php echo esc_url($rsv_btn_url); ?>" class="bg-white text-[#436C5E] rounded-[6px] font-medium leading-[26px] hover:bg-[#436C5E] hover:text-white transition-all duration-300 font-['Shippori_Mincho'] lg:w-[404px] w-[230px] h-[50px] text-[16px] tracking-[1.6px] flex items-center justify-center">
          <?php echo esc_html($rsv_btn_text); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php $is_en ? get_footer('en') : get_footer(); ?>
