<?php
/**
 * Template Name: Top
 */
$is_en = hotel_is_en();
$lang = $is_en ? 'en' : 'ja';
$is_en ? get_header('en') : get_header();

// Hero
$hero_title    = get_field('hero_title') ?: ($is_en ? 'A special time to fill your heart' : '心を満たす、特別な時間');
$hero_subtitle = get_field('hero_subtitle') ?: ($is_en ? 'An exquisite resort woven by silence and beauty' : '静寂と美しさが織りなす、極上のリゾートへ');

// Concept
$concept_subtitle = get_field('concept_subtitle');
$concept_text     = get_field('concept_text') ?: '';

// Services
$svc_subtitle = get_field('services_subtitle');
$svc = array();
for ($i = 1; $i <= 2; $i++) {
    $svc[$i] = array(
        'label' => get_field('top_service_' . $i . '_label') ?: '',
        'title' => get_field('top_service_' . $i . '_title') ?: '',
        'desc'  => get_field('top_service_' . $i . '_description') ?: '',
        'image' => get_field('top_service_' . $i . '_image'),
    );
}
$svc1_defaults = $is_en ? array('PRIVATE SAUNA', 'Sauna', '') : array('PRIVATE SAUNA', 'サウナ', '');
$svc2_defaults = $is_en ? array('FOOD', 'Dining', '') : array('FOOD', 'お食事', '');
$s1_label = $svc[1]['label'] ?: $svc1_defaults[0];
$s1_title = $svc[1]['title'] ?: $svc1_defaults[1];
$s1_desc  = $svc[1]['desc']  ?: $svc1_defaults[2];
$s2_label = $svc[2]['label'] ?: $svc2_defaults[0];
$s2_title = $svc[2]['title'] ?: $svc2_defaults[1];
$s2_desc  = $svc[2]['desc']  ?: $svc2_defaults[2];
$s1_img_src = $svc[1]['image'] ? esc_url($svc[1]['image']['url']) : hotel_asset('images/services/sauna.jpg');
$s2_img_src = $svc[2]['image'] ? esc_url($svc[2]['image']['url']) : hotel_asset('images/services/food.jpg');
$s1_label_vis = $svc[1]['label'] ? '' : ($is_en ? ' invisible' : '');
$s2_label_vis = $svc[2]['label'] ? '' : ($is_en ? ' invisible' : '');

// Access
$acc_subtitle        = get_field('access_subtitle');
$acc_location_title  = get_field('access_location_title') ?: ($is_en ? 'Location' : '所在地');
$acc_postal          = get_field('access_postal') ?: '〒 889-2162';
$acc_address         = get_field('access_address') ?: ($is_en ? '4-48-4 Aoshima, Miyazaki City, Miyazaki' : '宮崎県宮崎市青島4-48-4');
$acc_transport_title = get_field('access_transport_title') ?: ($is_en ? 'Transportation' : '交通アクセス');
$acc_transport       = get_field('access_transport') ?: '';
$acc_map_url         = get_field('access_map_url') ?: '/access';
$acc_map_pc          = get_field('access_map_image_pc');
$acc_map_sp          = get_field('access_map_image_sp');
$map_pc_src = $acc_map_pc ? esc_url($acc_map_pc['url']) : hotel_asset('images/access-map.jpg');
$map_sp_src = $acc_map_sp ? esc_url($acc_map_sp['url']) : hotel_asset('images/access-map-sp.jpg');

// FAQ
$faq_subtitle = get_field('top_faq_subtitle');
$top_faqs = array();
for ($i = 1; $i <= 3; $i++) {
    $top_faqs[$i] = array(
        'q' => get_field('top_faq_' . $i . '_question') ?: '',
        'a' => get_field('top_faq_' . $i . '_answer') ?: '',
    );
}

// Reservation
$rsv_subtitle = get_field('reservation_subtitle');
$rsv_text     = get_field('reservation_text') ?: ($is_en ? "Check availability and book easily online.\nEnjoy a special time with us." : "オンラインで簡単に\n空室確認・ご予約が可能です。\n特別なひとときをお過ごしください。");
$rsv_btn_text = get_field('reservation_btn_text') ?: ($is_en ? 'BOOK YOUR STAY' : 'ご予約はこちら');
$rsv_btn_url  = get_field('reservation_btn_url') ?: '/404';

// Contact
$ct_subtitle      = get_field('contact_subtitle');
$ct_intro         = get_field('contact_intro') ?: '';
$ct_phone_label   = get_field('contact_phone_label') ?: ($is_en ? 'Phone inquiries' : 'お電話でのお問い合わせ');
$ct_phone         = get_field('contact_phone') ?: '0985-73-8555';
$ct_type_label    = get_field('contact_type_label') ?: ($is_en ? 'Inquiry Type' : 'お問い合わせ区分');
$ct_type1         = get_field('contact_type_1') ?: ($is_en ? 'Individual' : '一般のお客様');
$ct_type2         = get_field('contact_type_2') ?: ($is_en ? 'Corporate / Group' : '法人・団体の方');
$ct_name_label    = get_field('contact_name_label') ?: ($is_en ? 'Name' : 'お名前');
$ct_email_label   = get_field('contact_email_label') ?: ($is_en ? 'Email' : 'メールアドレス');
$ct_message_label = get_field('contact_message_label') ?: ($is_en ? 'Message' : '内容');
$ct_privacy_text  = get_field('contact_privacy_text') ?: '';
$ct_privacy_link  = get_field('contact_privacy_link_text') ?: ($is_en ? 'Privacy Policy' : 'プライバシーポリシー');
$ct_submit_text   = get_field('contact_submit_text') ?: ($is_en ? 'Submit' : '送信する');
$sp_rsv_text      = get_field('sp_reservation_text') ?: ($is_en ? 'Reserve' : 'ご予約');
$required_msg     = $is_en ? 'Required field' : '必須項目です';
?>

<!-- FV Section -->
<section class="relative lg:min-h-[828px] lg:h-screen h-[753px] overflow-hidden" data-name="FV">
  <div class="absolute inset-0 w-full h-full">
    <div class="hidden lg:block absolute w-[1447px] h-[2170px] left-[-3px] top-[-674px]">
      <img src="<?php echo hotel_asset('images/hero/hero-bg.jpg'); ?>" alt="" class="absolute inset-0 w-full h-full object-cover max-w-none pointer-events-none" />
    </div>
    <div class="lg:hidden absolute w-[701.793px] h-[1052.558px] left-[-163.91px] top-[-149.4px]">
      <img src="<?php echo hotel_asset('images/hero/hero-bg.jpg'); ?>" alt="" class="absolute inset-0 w-full h-full object-cover max-w-none pointer-events-none" />
    </div>
  </div>

  <div class="absolute inset-0 bg-black w-full h-full">
    <video id="hero-video" class="absolute inset-0 w-full h-full min-w-full min-h-full object-cover" autoplay muted loop playsinline>
      <source src="<?php echo hotel_asset('videos/4441009-hd_1920_1080_25fps.mp4'); ?>" type="video/mp4">
    </video>
    <div id="hero-fallback" class="absolute inset-0 w-full h-full bg-black"></div>
  </div>

  <!-- Intro Overlay -->
  <div id="intro-overlay" class="intro-overlay">
    <img src="<?php echo hotel_asset('images/logo.png'); ?>" alt="LOGO" class="intro-logo" />
  </div>

  <!-- Hero Text -->
  <div class="absolute inset-0 flex items-center justify-center">
    <!-- PC -->
    <div class="hero-text lg:block hidden text-center text-white font-['Shippori_Mincho'] z-10 text-shadow-hero">
      <div class="w-[726.34px] h-[88px] flex flex-col gap-4 mx-auto">
        <h1 class="font-normal text-[32px] leading-[60px] tracking-[6px] h-[60px] flex items-center justify-center whitespace-pre-wrap"><?php echo esc_html($hero_title); ?></h1>
        <p class="font-normal text-[16px] leading-[28px] tracking-[1.8px] h-[28px] flex items-center justify-center w-[394.914px] mx-auto whitespace-pre-wrap"><?php echo esc_html($hero_subtitle); ?></p>
      </div>
    </div>
    <!-- SP -->
    <div class="hero-text lg:hidden block text-center text-white font-['Shippori_Mincho'] z-10 text-shadow-hero">
      <div class="w-full max-w-[375px] flex flex-col items-center gap-[8px] mx-auto">
        <h1 class="font-normal text-[24px] leading-[32px] tracking-[2.4px] h-[32px] w-full flex items-center justify-center whitespace-nowrap"><?php echo esc_html($hero_title); ?></h1>
        <p class="font-normal text-[14px] leading-[24px] tracking-[1.8px] w-full mx-auto text-center whitespace-pre-line"><?php echo esc_html($hero_subtitle); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- Concept Section -->
<section class="bg-[#F5EFEA] lg:py-[150px] lg:px-[calc(50%-464px)] py-[80px] px-[16px] text-center">
  <div class="lg:space-y-[32px] space-y-[32px]">
    <div class="w-full lg:w-[928px] lg:mx-auto space-y-[8px]">
      <h2 class="text-[32px] leading-[40px] lg:leading-[40px] tracking-[3.6px] font-medium text-[#436C5E] font-['Shippori_Mincho']">CONCEPT</h2>
      <p class="text-[14px] leading-[20px] tracking-[2.1px] lg:tracking-[2.1px] text-[#436C5E] font-['Shippori_Mincho']<?php echo $concept_subtitle ? '' : ' invisible'; ?>"><?php echo esc_html($concept_subtitle ?: 'CONCEPT'); ?></p>
    </div>
    <?php if ($concept_text) : ?>
    <div class="w-full lg:w-[928px] lg:mx-auto">
      <div class="text-[15px] lg:text-[16px] text-[#483F38] leading-[27px] lg:leading-[48px] tracking-[1.6px] font-['Shippori_Mincho'] text-center whitespace-pre-line"><?php echo esc_html($concept_text); ?></div>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- Cover Section -->
<section class="lg:h-[501px] h-[192px] relative overflow-hidden">
  <div class="lg:block hidden absolute inset-0">
    <img src="<?php echo hotel_asset('images/concept-bg.jpg'); ?>" alt="" class="absolute inset-0 w-full h-full object-cover" />
  </div>
  <img src="<?php echo hotel_asset('images/concept-bg.jpg'); ?>" alt="" class="lg:hidden absolute inset-0 w-full h-full object-cover object-[position:31.7%_21%]" />
</section>

<!-- Services Section -->
<section class="bg-[#F5EFEA] lg:py-[150px] lg:px-[80px] py-[80px] px-[16px]">
  <!-- PC -->
  <div class="lg:block hidden max-w-[1280px] mx-auto space-y-[80px]">
    <div class="text-center space-y-[8px]">
      <h2 class="text-[32px] leading-[40px] tracking-[3.6px] font-medium text-[#436C5E] font-['Shippori_Mincho']">SERVICES</h2>
      <p class="text-[14px] leading-[20px] tracking-[1.4px] text-[#436C5E] font-['Shippori_Mincho']<?php echo $svc_subtitle ? '' : ' invisible'; ?>"><?php echo esc_html($svc_subtitle ?: 'SERVICES'); ?></p>
    </div>
    <div class="space-y-[80px]">
      <!-- Service 1 -->
      <div class="flex items-center gap-[80px]">
        <div class="w-[800px] h-[501px] relative overflow-hidden lg:ml-[calc(50%-50vw)]">
          <img src="<?php echo $s1_img_src; ?>" alt="<?php echo esc_attr($s1_title); ?>" class="w-full h-full object-cover" />
        </div>
        <div class="w-[368px] space-y-[24px]">
          <div class="space-y-0">
            <p class="text-[12px] leading-[48px] tracking-[4.8px] text-[#B99563] font-['Shippori_Mincho']<?php echo $s1_label_vis; ?>"><?php echo esc_html($s1_label); ?></p>
            <h3 class="text-[24px] leading-[32px] tracking-[2.4px] font-medium text-[#436C5E] font-['Shippori_Mincho']"><?php echo esc_html($s1_title); ?></h3>
          </div>
          <?php if ($s1_desc) : ?>
          <div class="text-[14px] leading-[40px] tracking-[1.4px] text-[#483F38] font-['Shippori_Mincho'] whitespace-pre-line"><?php echo esc_html($s1_desc); ?></div>
          <?php endif; ?>
        </div>
      </div>
      <!-- Service 2 -->
      <div class="flex items-center gap-[80px] lg:justify-end">
        <div class="w-[332px] space-y-[24px]">
          <div class="space-y-0">
            <p class="text-[12px] leading-[48px] tracking-[4.8px] text-[#B99563] font-['Shippori_Mincho']<?php echo $s2_label_vis; ?>"><?php echo esc_html($s2_label); ?></p>
            <h3 class="text-[24px] leading-[32px] tracking-[2.4px] font-medium text-[#436C5E] font-['Shippori_Mincho']"><?php echo esc_html($s2_title); ?></h3>
          </div>
          <?php if ($s2_desc) : ?>
          <div class="text-[14px] leading-[40px] tracking-[1.4px] text-[#483F38] font-['Shippori_Mincho'] whitespace-pre-line"><?php echo esc_html($s2_desc); ?></div>
          <?php endif; ?>
        </div>
        <div class="w-[800px] h-[501px] relative overflow-hidden lg:mr-[calc(50%-50vw)]">
          <img src="<?php echo $s2_img_src; ?>" alt="<?php echo esc_attr($s2_title); ?>" class="absolute max-w-none w-[1130px] h-[753px] left-[-192px] top-[-132px] object-cover" />
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="<?php echo home_url('/' . $lang . '/services/'); ?>" class="inline-flex items-center justify-center border border-[#436C5E] text-[#436C5E] px-[49px] py-[10px] rounded-full text-[14px] tracking-[2.1px] leading-[22.75px] hover:bg-[#436C5E] hover:text-white transition-all duration-300 font-['Shippori_Mincho'] w-[150px] h-[43px]">
        MORE
      </a>
    </div>
  </div>
  <!-- SP -->
  <div class="lg:hidden block w-full sp-services">
    <div class="sp-services-inner flex flex-col gap-[40px] w-full" style="gap: 40px;">
      <div class="text-center space-y-[8px]">
        <h2 class="text-[32px] leading-[48px] tracking-[3.6px] font-medium text-[#436C5E] font-['Shippori_Mincho'] w-[227.967px] mx-auto">SERVICES</h2>
        <p class="text-[14px] leading-[20px] tracking-[1.4px] text-[#436C5E] font-['Shippori_Mincho'] w-[92.753px] mx-auto<?php echo $svc_subtitle ? '' : ' invisible'; ?>"><?php echo esc_html($svc_subtitle ?: 'SERVICES'); ?></p>
      </div>
      <div class="sp-services-list flex flex-col gap-[32px] w-full" style="gap: 32px;">
        <!-- SP Service 1 -->
        <div class="sp-service-item flex flex-col gap-[24px]" style="gap: 24px;">
          <div class="w-full h-[214.804px] relative overflow-hidden">
            <img src="<?php echo $s1_img_src; ?>" alt="<?php echo esc_attr($s1_title); ?>" class="w-full h-full object-cover" />
          </div>
          <div class="w-full sp-service-text flex flex-col gap-[16px] text-left" style="gap: 16px;">
            <div class="space-y-0">
              <p class="text-[12px] leading-[48px] tracking-[4.8px] text-[#B99563] font-['Shippori_Mincho'] m-0 h-[21px] flex items-center<?php echo $s1_label_vis; ?>"><?php echo esc_html($s1_label); ?></p>
              <h3 class="text-[24px] leading-[32px] tracking-[2.4px] font-medium text-[#436C5E] font-['Shippori_Mincho'] m-0"><?php echo esc_html($s1_title); ?></h3>
            </div>
            <?php if ($s1_desc) : ?>
            <div class="text-[14px] leading-[30px] tracking-[1.4px] text-[#483F38] font-['Shippori_Mincho'] whitespace-pre-line"><?php echo esc_html($s1_desc); ?></div>
            <?php endif; ?>
          </div>
        </div>
        <!-- SP Service 2 -->
        <div class="sp-service-item flex flex-col gap-[24px]" style="gap: 24px;">
          <div class="w-full h-[214.804px] relative overflow-hidden">
            <img src="<?php echo $s2_img_src; ?>" alt="<?php echo esc_attr($s2_title); ?>" class="w-full h-full object-cover" />
          </div>
          <div class="w-full sp-service-text flex flex-col gap-[16px] text-left" style="gap: 16px;">
            <div class="space-y-0">
              <p class="text-[12px] leading-[48px] tracking-[4.8px] text-[#B99563] font-['Shippori_Mincho'] m-0 h-[21px] flex items-center<?php echo $s2_label_vis; ?>"><?php echo esc_html($s2_label); ?></p>
              <h3 class="text-[24px] leading-[32px] tracking-[2.4px] font-medium text-[#436C5E] font-['Shippori_Mincho'] m-0"><?php echo esc_html($s2_title); ?></h3>
            </div>
            <?php if ($s2_desc) : ?>
            <div class="text-[14px] leading-[30px] tracking-[1.4px] text-[#483F38] font-['Shippori_Mincho'] whitespace-pre-line"><?php echo esc_html($s2_desc); ?></div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="flex justify-center">
        <a href="<?php echo home_url('/' . $lang . '/services/'); ?>" class="inline-flex items-center justify-center border border-[#436C5E] text-[#436C5E] px-[49px] py-[10px] rounded-full text-[14px] tracking-[2.1px] leading-[22.75px] hover:bg-[#436C5E] hover:text-white transition-all duration-300 font-['Shippori_Mincho'] w-[150px] h-[43px]">
          MORE
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Rooms Section -->
<section class="bg-[#F5EFEA] lg:pb-[150px] pb-[80px]">
  <div class="lg:space-y-[100px] space-y-0">
    <div class="relative lg:h-[663px] h-[475px] overflow-hidden">
      <img src="<?php echo hotel_asset('images/rooms/IMGL0459.jpg'); ?>" alt="" class="hidden lg:block absolute inset-0 w-full h-full object-cover" />
      <img src="<?php echo hotel_asset('images/rooms/IMGL0459.jpg'); ?>" alt="" class="lg:hidden absolute inset-0 w-full h-full object-cover object-[position:31.9%_100%]" />

      <!-- PC Title Overlay -->
      <div class="absolute lg:block hidden lg:bottom-0 lg:left-0 lg:w-[625px] lg:h-[156px] bg-[#F5EFEA]">
        <div class="absolute top-[46px] left-[104px] w-[471px] h-[68px] flex items-end justify-between">
          <div class="space-y-[8px]">
            <h2 class="text-[36px] leading-[40px] tracking-[3.6px] font-medium text-[#436C5E] font-['Shippori_Mincho']">ROOMS</h2>
            <p class="text-[14px] leading-[20px] tracking-[1.4px] text-[#436C5E] font-['Shippori_Mincho']<?php echo $is_en ? ' invisible' : ''; ?>"><?php echo $is_en ? 'ROOMS' : 'お部屋'; ?></p>
          </div>
          <a href="<?php echo home_url('/' . $lang . '/rooms/'); ?>" class="border border-[#436C5E] text-[#436C5E] px-[49px] py-[10px] rounded-full text-[14px] tracking-[2.1px] leading-[22.75px] hover:bg-[#436C5E] hover:text-white transition-all duration-300 font-['Shippori_Mincho'] inline-block h-[43px] flex items-center">
            MORE
          </a>
        </div>
      </div>

      <!-- SP Title Overlay -->
      <div class="lg:hidden absolute top-[340px] left-0 w-[298px] h-[142px] bg-[#F5EFEA]"></div>
      <div class="lg:hidden absolute top-[356.381px] left-0 w-[297px] h-[127px]">
        <div class="absolute left-[16px] top-0 w-[265px] h-full flex flex-col justify-start gap-[8px]">
          <div class="relative h-[68px]">
            <h2 class="absolute left-0 top-0 text-[32px] leading-[48px] tracking-[3.6px] font-medium text-[#436C5E] font-['Shippori_Mincho']">ROOMS</h2>
            <p class="absolute left-0 top-[48px] text-[14px] leading-[20px] tracking-[1.4px] text-[#436C5E] font-['Shippori_Mincho']<?php echo $is_en ? ' invisible' : ''; ?>"><?php echo $is_en ? 'ROOMS' : 'お部屋'; ?></p>
          </div>
          <a href="<?php echo home_url('/' . $lang . '/rooms/'); ?>" class="absolute left-[110px] top-[70px] border border-[#436C5E] text-[#436C5E] px-[49px] py-[10px] rounded-full text-[14px] tracking-[2.1px] leading-[22.75px] hover:bg-[#436C5E] hover:text-white transition-all duration-300 font-['Shippori_Mincho']">
            MORE
          </a>
        </div>
      </div>
    </div>

    <!-- Room Gallery PC -->
    <div class="lg:block hidden">
      <div class="overflow-hidden">
        <div id="room-gallery-pc" class="flex gap-[40px] px-[25px] w-max">
          <?php
          $room_images = [
            ['IMGL0079-Edit.jpg', $is_en ? 'Bedroom' : 'ベッドルーム'],
            ['IMGL0437.jpg', $is_en ? 'Hallway' : '廊下エリア'],
            ['IMGL0443-Edit.jpg', $is_en ? 'Bathroom' : 'バスルーム'],
            ['IMGL0156.jpg', $is_en ? 'Table Area' : 'テーブルエリア'],
            ['IMGL0440.jpg', $is_en ? 'Living Area' : 'リビングエリア'],
            ['IMGL0459.jpg', $is_en ? 'Main Room' : '客室メイン'],
          ];
          for ($set = 0; $set < 2; $set++) :
            foreach ($room_images as $img) :
          ?>
          <div class="w-[350px] h-[250px] flex-shrink-0 overflow-hidden relative">
            <img src="<?php echo hotel_asset('images/rooms/' . $img[0]); ?>" alt="<?php echo esc_attr($img[1]); ?>" class="w-full h-full object-cover" />
          </div>
          <?php
            endforeach;
          endfor;
          ?>
        </div>
      </div>
    </div>

    <!-- Room Gallery SP -->
    <div class="lg:hidden mt-0 pt-[40px]">
      <div class="relative h-[105.903px] overflow-hidden">
        <div id="room-gallery-sp" class="flex gap-[16.94px] w-max -ml-[117.5px]">
          <?php
          $room_images_sp = [
            ['IMGL0079-Edit.jpg', $is_en ? 'Bedroom' : 'ベッドルーム'],
            ['IMGL0437.jpg', $is_en ? 'Hallway' : '廊下エリア'],
            ['IMGL0156.jpg', $is_en ? 'Table Area' : 'テーブルエリア'],
            ['IMGL0440.jpg', $is_en ? 'Living Area' : 'リビングエリア'],
            ['IMGL0443-Edit.jpg', $is_en ? 'Bathroom' : 'バスルーム'],
          ];
          for ($set = 0; $set < 2; $set++) :
            foreach ($room_images_sp as $img) :
          ?>
          <div class="w-[148.264px] h-[105.903px] flex-shrink-0 overflow-hidden">
            <img src="<?php echo hotel_asset('images/rooms/' . $img[0]); ?>" alt="<?php echo esc_attr($img[1]); ?>" class="w-full h-full object-cover" />
          </div>
          <?php
            endforeach;
          endfor;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Access Section -->
<section id="access" class="bg-white lg:py-[150px] lg:px-[256px] py-[80px] px-[16px]">
  <div class="lg:gap-[32px] gap-[32px] flex flex-col items-center">
    <div class="text-center space-y-[8px] w-full">
      <h2 class="lg:text-[32px] lg:leading-[40px] lg:tracking-[3.6px] text-[32px] leading-[40px] tracking-[3.6px] font-medium text-[#436C5E] font-['Shippori_Mincho']">ACCESS</h2>
      <p class="lg:leading-[20px] text-[14px] leading-[20px] tracking-[1.4px] text-[#436C5E] font-['Shippori_Mincho']<?php echo $acc_subtitle ? '' : ($is_en ? ' invisible' : ''); ?>"><?php echo esc_html($acc_subtitle ?: ($is_en ? 'ACCESS' : 'アクセス')); ?></p>
    </div>

    <div class="lg:flex lg:items-center lg:justify-between lg:pl-[120px] lg:w-[1232px] w-full lg:space-y-0 space-y-[32px]">
      <div class="lg:w-[361px] w-full lg:space-y-[32px] space-y-[32px] lg:items-start items-center flex flex-col lg:justify-center justify-center">
        <div class="flex w-full flex-col items-center lg:items-start gap-[32px]">
          <div class="space-y-[16px] lg:text-left text-center w-full">
            <h3 class="lg:text-[18px] lg:leading-[32px] lg:tracking-[1.6px] text-[18px] leading-[32px] tracking-[1.6px] font-medium text-[#436C5E] font-['Shippori_Mincho']"><?php echo esc_html($acc_location_title); ?></h3>
            <div class="lg:text-[14px] lg:leading-[30px] lg:tracking-[1.4px] text-[14px] leading-[30px] tracking-[1.4px] text-[#483F38] font-['Shippori_Mincho']">
              <p class="mb-0"><?php echo esc_html($acc_postal); ?></p>
              <p class="mb-0"><?php echo esc_html($acc_address); ?></p>
            </div>
          </div>
          <div class="h-px w-full bg-[#436C5E]/20"></div>
          <div class="space-y-[16px] lg:text-left text-center w-full">
            <h3 class="lg:text-[18px] lg:leading-[32px] lg:tracking-[1.6px] text-[18px] leading-[32px] tracking-[1.6px] font-medium text-[#436C5E] font-['Shippori_Mincho']"><?php echo esc_html($acc_transport_title); ?></h3>
            <?php if ($acc_transport) : ?>
            <div class="lg:text-[14px] lg:leading-[30px] lg:tracking-[1.4px] text-[14px] leading-[30px] tracking-[1.4px] text-[#483F38] font-['Shippori_Mincho'] whitespace-pre-line"><?php echo esc_html($acc_transport); ?></div>
            <?php endif; ?>
          </div>
        </div>
        <div class="lg:flex lg:justify-start flex justify-center lg:w-auto w-full">
          <a href="<?php echo esc_url($acc_map_url); ?>" class="inline-flex items-center justify-center gap-[10px] border border-[#436C5E] text-[#436C5E] px-[49px] py-[10px] rounded-full text-[14px] tracking-[2.1px] hover:bg-[#436C5E] hover:text-white transition-all duration-300 font-['Shippori_Mincho']">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0">
              <path d="M9 1.5C6.51472 1.5 4.5 3.51472 4.5 6C4.5 9.75 9 16.5 9 16.5C9 16.5 13.5 9.75 13.5 6C13.5 3.51472 11.4853 1.5 9 1.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
              <circle cx="9" cy="6" r="1.5" stroke="currentColor" stroke-width="1.5" fill="none"/>
            </svg>
            GoogleMap
          </a>
        </div>
      </div>
      <!-- Map PC -->
      <div class="lg:w-[600px] lg:h-[400px] w-full h-[220px] relative lg:block hidden">
        <img src="<?php echo $map_pc_src; ?>" alt="<?php echo $is_en ? 'Access Map' : 'アクセスマップ'; ?>" class="w-full h-full object-cover" />
      </div>
      <!-- Map SP -->
      <div class="w-full h-[220px] relative lg:hidden block">
        <img src="<?php echo $map_sp_src; ?>" alt="<?php echo $is_en ? 'Access Map' : 'アクセスマップ'; ?>" class="w-full h-full object-cover" />
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="bg-[#F5EFEA] lg:py-[150px] lg:px-[80px] py-[80px] px-[16px]">
  <div class="lg:max-w-[1280px] max-w-full mx-auto lg:space-y-[32px] space-y-[32px] lg:px-[194px] px-0">
    <div class="text-center space-y-[8px]">
      <h2 class="lg:text-[32px] lg:leading-[40px] lg:tracking-[3.6px] text-[32px] leading-[40px] tracking-[3.6px] font-medium text-[#436C5E] font-['Shippori_Mincho']">FAQ</h2>
      <p class="text-[14px] leading-[20px] tracking-[1.4px] text-[#436C5E] font-['Shippori_Mincho']<?php echo $faq_subtitle ? '' : ($is_en ? ' invisible' : ''); ?>"><?php echo esc_html($faq_subtitle ?: ($is_en ? 'FAQ' : 'よくあるご質問')); ?></p>
    </div>

    <div class="space-y-[32px]">
      <?php foreach ($top_faqs as $faq) :
        if (empty($faq['q'])) continue;
      ?>
      <div class="border-b border-[#436C5E]/20 pb-[32px]">
        <div class="flex gap-1 items-baseline mb-2">
          <span class="text-[#436C5E] text-[16px] leading-[27px] lg:leading-[32px] tracking-[1px] font-['Shippori_Mincho']">Q.</span>
          <p class="text-[#436C5E] text-[15px] leading-[27px] tracking-[1.6px] font-['Shippori_Mincho'] flex-1"><?php echo esc_html($faq['q']); ?></p>
        </div>
        <div class="pl-6">
          <p class="text-[#483F38] text-[14px] leading-[23px] tracking-[1.4px] font-['Shippori_Mincho']">A. <?php echo nl2br(esc_html($faq['a'])); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center">
      <a href="<?php echo home_url('/' . $lang . '/faq/'); ?>" class="inline-block border border-[#436C5E] text-[#436C5E] px-12 py-3 rounded-full text-[14px] tracking-[2.1px] hover:bg-[#436C5E] hover:text-white transition-all duration-300 font-['Shippori_Mincho']">
        MORE
      </a>
    </div>
  </div>
</section>

<!-- Reservation Section -->
<section class="relative lg:py-[150px] lg:px-[272px] py-[80px] px-[16px]">
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

<!-- Contact Section -->
<section id="contact" class="bg-[#FAFAFA] lg:py-[150px] py-[80px]">
  <div class="w-full lg:max-w-[1440px] lg:mx-auto lg:px-[256px] px-[16px] flex flex-col items-center">
    <div class="text-center lg:space-y-[40px] space-y-[32px] lg:mb-[80px] mb-20">
      <div class="space-y-[8px]">
        <h2 class="lg:text-[32px] lg:leading-[40px] lg:tracking-[3.6px] text-[32px] leading-[40px] tracking-[3.6px] font-medium text-[#436C5E] font-['Shippori_Mincho']">CONTACT</h2>
        <p class="lg:text-[14px] lg:leading-[20px] lg:tracking-[2.1px] text-[14px] leading-[20px] tracking-[1.4px] text-[#436C5E] font-['Shippori_Mincho']<?php echo $ct_subtitle ? '' : ($is_en ? ' invisible' : ''); ?>"><?php echo esc_html($ct_subtitle ?: ($is_en ? 'CONTACT' : 'お問い合わせ')); ?></p>
      </div>
      <div class="lg:space-y-[40px] space-y-8">
        <?php if ($ct_intro) : ?>
        <p class="lg:text-[16px] lg:leading-[32px] lg:tracking-[1px] text-[14px] leading-[22.75px] tracking-[2.1px] text-[#483F38] font-['Shippori_Mincho'] text-center whitespace-pre-line lg:w-[953px] lg:mx-auto"><?php echo esc_html($ct_intro); ?></p>
        <?php endif; ?>
        <div class="space-y-[8px] text-center lg:w-[544px] lg:mx-auto">
          <p class="lg:text-[14px] lg:leading-[22.75px] lg:tracking-[2.1px] text-[13px] leading-[20px] tracking-[1.8px] text-[#483F38] font-['Shippori_Mincho']"><?php echo esc_html($ct_phone_label); ?></p>
          <h3 class="lg:text-[36px] lg:leading-[54px] lg:tracking-[3.6px] text-[28px] leading-[42px] tracking-[2.8px] font-medium text-[#436C5E] font-['Shippori_Mincho']"><?php echo esc_html($ct_phone); ?></h3>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="bg-white lg:p-[48px] p-[24px] rounded-[8px] shadow-sm lg:w-[672px] mx-auto w-full">
      <form id="contact-form" action="<?php echo home_url('/' . $lang . '/contact-confirm/'); ?>" method="get" class="space-y-[56px] lg:w-[576px] mx-auto w-full" novalidate>
        <div class="lg:space-y-8 space-y-6">
          <!-- Contact Type -->
          <div class="space-y-2">
            <div class="flex items-center gap-2">
              <label class="text-[16px] tracking-[1px] text-[#436C5E] font-['Shippori_Mincho']"><?php echo esc_html($ct_type_label); ?></label>
              <span class="text-[12px] tracking-[1.2px] text-red-500 uppercase font-['Shippori_Mincho']">*</span>
            </div>
            <div class="lg:flex lg:gap-6 space-y-4 lg:space-y-0">
              <label class="flex items-center lg:gap-[12px] gap-[12px]">
                <input type="radio" name="contact_type" class="w-[20px] h-[20px] accent-[#436C5E]" checked>
                <span class="text-[16px] leading-[32px] tracking-[1px] text-[#475569] font-['Shippori_Mincho']"><?php echo esc_html($ct_type1); ?></span>
              </label>
              <label class="flex items-center lg:gap-[12px] gap-[12px]">
                <input type="radio" name="contact_type" class="w-[20px] h-[20px] accent-[#436C5E]" data-required>
                <span class="text-[16px] leading-[32px] tracking-[1px] text-[#475569] font-['Shippori_Mincho']"><?php echo esc_html($ct_type2); ?></span>
              </label>
            </div>
          </div>
          <!-- Name -->
          <div class="space-y-2">
            <div class="flex items-center gap-2">
              <label class="text-[16px] leading-[32px] tracking-[1px] text-[#436C5E] font-['Shippori_Mincho']"><?php echo esc_html($ct_name_label); ?></label>
              <span class="text-[12px] leading-[16px] tracking-[1.2px] text-red-500 uppercase font-['Shippori_Mincho']">*</span>
            </div>
            <input type="text" id="contact-name" name="name" class="w-full h-[45px] border border-[#93A9A1] bg-white px-4" data-required>
            <p id="contact-name-error" class="hidden text-red-500 text-[12px] leading-[16px] tracking-[1.2px] font-['Shippori_Mincho']"><?php echo esc_html($required_msg); ?></p>
          </div>
          <!-- Email -->
          <div class="space-y-2">
            <div class="flex items-center gap-2">
              <label class="text-[16px] leading-[32px] tracking-[1px] text-[#436C5E] font-['Shippori_Mincho']"><?php echo esc_html($ct_email_label); ?></label>
              <span class="text-[12px] leading-[16px] tracking-[1.2px] text-red-500 uppercase font-['Shippori_Mincho']">*</span>
            </div>
            <input type="email" id="contact-email" name="email" class="w-full h-[45px] border border-[#93A9A1] bg-white px-4" data-required>
            <p id="contact-email-error" class="hidden text-red-500 text-[12px] leading-[16px] tracking-[1.2px] font-['Shippori_Mincho']"><?php echo esc_html($required_msg); ?></p>
          </div>
          <!-- Message -->
          <div class="space-y-2">
            <div class="flex items-center gap-2">
              <label class="text-[16px] leading-[32px] tracking-[1px] text-[#436C5E] font-['Shippori_Mincho']"><?php echo esc_html($ct_message_label); ?></label>
              <span class="text-[12px] leading-[16px] tracking-[1.2px] text-red-500 uppercase font-['Shippori_Mincho']">*</span>
            </div>
            <textarea id="contact-message" name="message" class="w-full h-[160px] border border-[#93A9A1] bg-white p-4 resize-none" data-required></textarea>
            <p id="contact-message-error" class="hidden text-red-500 text-[12px] leading-[16px] tracking-[1.2px] font-['Shippori_Mincho']"><?php echo esc_html($required_msg); ?></p>
          </div>
          <!-- Privacy -->
          <div class="lg:space-y-4 space-y-3 text-[12px] text-[#483F38] font-['Shippori_Mincho']">
            <?php if ($ct_privacy_text) : ?>
            <p class="leading-[19px] whitespace-pre-line"><?php echo esc_html($ct_privacy_text); ?></p>
            <?php endif; ?>
            <label class="flex items-start lg:items-center gap-2 cursor-pointer">
              <input type="checkbox" id="contact-privacy" class="w-4 h-4 mt-1 lg:mt-0 accent-[#436C5E]">
              <span class="leading-[32px] tracking-[1.6px]">
                <a href="<?php echo home_url('/' . $lang . '/privacy-policy/'); ?>" target="_blank" rel="noreferrer" class="inline-flex items-center gap-1 text-[#436C5E] hover:opacity-60 transition-opacity">
                  <?php echo esc_html($ct_privacy_link); ?>
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M7 1H11V5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11 1L6 6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5 2H2C1.44772 2 1 2.44772 1 3V10C1 10.5523 1.44772 11 2 11H9C9.55228 11 10 10.5523 10 10V7" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </a>
                <?php echo $is_en ? ' I agree' : 'に同意する'; ?>
              </span>
            </label>
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="bg-[#B99563] border border-[#B99563] text-white lg:px-[49px] px-12 lg:py-[10px] py-3 rounded-full text-[14px] leading-[22.75px] tracking-[2.1px] hover:bg-white hover:text-[#B99563] hover:border-[#B99563] transition-all duration-300 font-['Shippori_Mincho'] disabled:bg-[#D9D9D9] disabled:border-[#D9D9D9] disabled:text-[#8B8B8B] disabled:cursor-not-allowed disabled:hover:bg-[#D9D9D9] disabled:hover:text-[#8B8B8B] disabled:hover:border-[#D9D9D9]">
            <?php echo esc_html($ct_submit_text); ?>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- Fixed Reservation Button (SP only) -->
<div id="fixed-reservation-btn" class="fixed left-1/2 transform -translate-x-1/2 z-50 lg:hidden">
  <a href="<?php echo esc_url($rsv_btn_url); ?>" class="flex items-center justify-center gap-[10px] bg-[#436C5E] border border-[#436C5E] text-white px-[20px] py-[10px] rounded-full font-['Shippori_Mincho'] font-normal text-[14px] tracking-[2.1px] transition-all duration-300 shadow-lg hover:bg-white hover:text-[#436C5E] hover:border-[#436C5E] hover:shadow-xl min-w-[139px] h-[43px]">
    <svg class="w-[18px] h-[18px] flex-shrink-0" viewBox="0 0 18 18" fill="none">
      <path d="M15 2h-1V1c0-.55-.45-1-1-1s-1 .45-1 1v1H6V1c0-.55-.45-1-1-1s-1 .45-1 1v1H3c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 13H3V7h12v8zM3 5V4h12v1H3z" fill="currentColor"/>
    </svg>
    <span class="whitespace-nowrap"><?php echo esc_html($sp_rsv_text); ?></span>
  </a>
</div>

<?php $is_en ? get_footer('en') : get_footer(); ?>
