<?php
/**
 * Template Name: Rooms
 */
$is_en = hotel_is_en();
$lang = $is_en ? 'en' : 'ja';
$is_en ? get_header('en') : get_header();

// Helper: get ACF image URL with fallback
function hotel_acf_img($field, $fallback) {
    $img = get_field($field);
    return $img ? esc_url($img['url']) : hotel_asset($fallback);
}
function hotel_acf_alt($field, $fallback) {
    $img = get_field($field);
    return $img && !empty($img['alt']) ? esc_attr($img['alt']) : $fallback;
}

$kv_heading       = get_field('kv_heading') ?: 'ROOM';
$kv_image         = get_field('kv_image');
$concept_heading  = get_field('concept_heading') ?: ($is_en ? 'Escape the Everyday,\nImmerse in Silence and Design' : "日常を忘れ、静寂とデザインに浸る");
$concept_text     = get_field('concept_text') ?: '';
$concept_btn_text = get_field('concept_btn_text') ?: ($is_en ? 'Reserve' : '予約をする');
$concept_btn_url  = get_field('concept_btn_url') ?: '/404';
$room_heading     = get_field('room_heading') ?: 'ROOM';
$room_subtitle    = get_field('room_subtitle');
$room_desc        = get_field('room_description') ?: '';
$rsv_subtitle     = get_field('rsv_subtitle');
$rsv_text         = get_field('rsv_text') ?: ($is_en ? "Book online easily.\nCheck availability and reserve.\nEnjoy a special moment." : "オンラインで簡単に\n空室確認・ご予約が可能です。\n特別なひとときをお過ごしください。");
$rsv_btn_text     = get_field('rsv_btn_text') ?: ($is_en ? 'Reserve Now' : 'ご予約はこちら');
$rsv_btn_url      = get_field('rsv_btn_url') ?: '/404';
?>

<!-- KV -->
<section class="relative h-[380px] lg:h-[640px] overflow-hidden">
  <div class="rooms-kv-bg kv-fade-bg absolute inset-0" style="background-position: center; background-size: cover;<?php if ($kv_image) echo ' background-image: url(' . esc_url($kv_image['url']) . ');'; ?>"></div>
  <div class="kv-fade-overlay absolute inset-0 bg-[#483F38]"></div>
  <div class="absolute inset-0 flex items-center justify-center">
    <h1 class="text-center text-white/85 text-[32px] lg:text-[32px] leading-[32px] tracking-[2.8px] lg:tracking-[4.8px] font-['Shippori_Mincho'] translate-y-[20.5px] lg:translate-y-0">
      <?php echo esc_html($kv_heading); ?>
    </h1>
  </div>
</section>

<!-- Concept -->
<section class="bg-[#F5EFEA] px-[16px] py-[80px] min-[1025px]:px-[256px] lg:py-[120px]">
  <div class="mx-auto flex max-w-[928px] flex-col items-center text-center">
    <h2 class="text-[24px] leading-[39px] tracking-[3.6px] lg:text-[32px] lg:leading-[54px] lg:tracking-[3.6px] text-[#436C5E] font-medium font-['Shippori_Mincho']">
      <?php echo nl2br(esc_html($concept_heading)); ?>
    </h2>
    <?php if ($concept_text) : ?>
    <p class="mt-[32px] text-[15px] leading-[27px] tracking-[1.6px] lg:mt-[40px] lg:w-[928px] lg:text-[16px] lg:leading-[48px] lg:tracking-[1.6px] text-[#483F38] font-['Shippori_Mincho']">
      <?php echo nl2br(esc_html($concept_text)); ?>
    </p>
    <?php endif; ?>
    <a href="<?php echo esc_url($concept_btn_url); ?>" class="mt-[32px] inline-flex h-[43px] w-[177px] items-center justify-center rounded-full border border-[#436C5E] text-[#436C5E] text-[14px] leading-[22.75px] tracking-[2.1px] font-['Shippori_Mincho'] hover:bg-[#436C5E] hover:text-white transition-colors lg:mt-[40px]">
      <?php echo esc_html($concept_btn_text); ?>
    </a>
  </div>
</section>

<!-- Room -->
<section class="room-section px-[16px] py-[80px] lg:px-[calc(50%-464px)] lg:py-[150px]">
  <div class="mx-auto flex w-full flex-col items-center gap-[32px] lg:w-[928px] lg:gap-[32px]">
    <div class="text-center w-full lg:w-auto">
      <p class="text-[32px] leading-[48px] tracking-[3.6px] lg:text-[36px] lg:leading-[54px] lg:tracking-[3.6px] text-[#436C5E] font-medium font-['Shippori_Mincho']"><?php echo esc_html($room_heading); ?></p>
      <?php if ($room_subtitle) : ?>
      <p class="mt-[16px] text-[14px] leading-[22.75px] tracking-[2.1px] text-[#436C5E] font-['Shippori_Mincho']"><?php echo esc_html($room_subtitle); ?></p>
      <?php endif; ?>
    </div>
    <?php if ($room_desc) : ?>
    <p class="room-desc w-full text-center text-[15px] leading-[27px] tracking-[1.6px] text-[#483F38] lg:w-[627px] lg:text-[16px] lg:leading-[32px] lg:tracking-[1px] font-['Shippori_Mincho']">
      <?php echo nl2br(esc_html($room_desc)); ?>
    </p>
    <?php endif; ?>
    <div class="w-full pt-[0] lg:w-[800px] lg:pt-[40px]">
      <img src="<?php echo hotel_acf_img('room_image', 'images/rooms/room-main.jpg'); ?>" alt="<?php echo hotel_acf_alt('room_image', $is_en ? 'Room' : '客室メイン'); ?>" class="fade-target w-full h-auto lg:h-[628px] lg:w-[800px] lg:object-cover" />
    </div>
  </div>
</section>

<!-- Features -->
<section class="bg-[#F5EFEA] px-[16px] py-[80px] lg:bg-[#F5EFEA] lg:px-0 lg:py-[150px]">
  <div class="mx-auto w-full lg:max-w-[1232px] lg:px-[16px]">
    <div class="text-center w-full mx-auto lg:w-[294px]">
      <p class="text-[36px] leading-[54px] tracking-[3.6px] text-[#483F38] font-medium font-['Shippori_Mincho'] lg:text-[36px] lg:leading-[54px] lg:tracking-[3.6px] lg:text-[#436C5E]">FEATURES</p>
      <p class="mt-[16px] text-[14px] leading-[22.75px] tracking-[2.1px] text-[#B99563] font-['Shippori_Mincho'] lg:text-[#436C5E]"><?php echo $is_en ? '' : '部屋の特徴'; ?></p>
    </div>

    <div class="mt-[40px] space-y-[40px] lg:mt-[120px] lg:space-y-[120px]">
      <?php
      $feat1_title = get_field('feature_1_title') ?: ($is_en ? 'Exclusive Private Retreat' : '一日一組限定の一棟貸し');
      $feat1_desc  = get_field('feature_1_description') ?: '';
      $feat1_image = get_field('feature_1_image');
      ?>
      <!-- Feature 1 -->
      <div class="flex flex-col gap-[24px] lg:flex-row lg:items-center lg:gap-[100px]">
        <div class="feature-1-img fade-target w-full lg:h-[501px] lg:w-[563px]" style="aspect-ratio: 343 / 305;<?php if ($feat1_image) echo ' background-image: url(' . esc_url($feat1_image['url']) . '); background-size: cover; background-position: center;'; ?>"></div>
        <div class="w-full max-w-[538px] lg:w-[538px] flex flex-col gap-[16px]">
          <h3 class="mt-0 text-[24px] leading-[32px] tracking-[2.4px] text-[#483F38] font-medium font-['Shippori_Mincho']"><?php echo esc_html($feat1_title); ?></h3>
          <?php if ($feat1_desc) : ?>
          <p class="mt-0 mb-[40px] text-[14px] leading-[30px] tracking-[1.4px] text-[#475569] font-['Shippori_Mincho'] lg:mb-0 lg:w-[525px]">
            <?php echo nl2br(esc_html($feat1_desc)); ?>
          </p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <?php
  $feat2_title = get_field('feature_2_title') ?: ($is_en ? 'A Haven of Light and Openness' : '光と余白に癒える、非日常の邸宅');
  $feat2_desc  = get_field('feature_2_description') ?: '';
  $feat2_image = get_field('feature_2_image');
  ?>
  <!-- Feature 2 -->
  <div class="mt-[40px] lg:mt-[120px]">
    <div class="mx-auto w-full lg:max-w-[1232px] lg:px-[16px]">
      <div class="flex flex-col gap-[24px] lg:flex-row lg:items-center lg:gap-[100px]">
        <div class="order-2 w-full max-w-[538px] lg:order-1 lg:w-[538px] flex flex-col gap-[16px]">
          <h3 class="mt-0 text-[24px] leading-[32px] tracking-[2.4px] text-[#483F38] font-medium font-['Shippori_Mincho']"><?php echo esc_html($feat2_title); ?></h3>
          <?php if ($feat2_desc) : ?>
          <p class="mt-0 mb-[40px] text-[14px] leading-[30px] tracking-[1.4px] text-[#475569] font-['Shippori_Mincho'] lg:mb-0 lg:w-[525px]">
            <?php echo nl2br(esc_html($feat2_desc)); ?>
          </p>
          <?php endif; ?>
        </div>
        <div class="feature-2-img fade-target order-1 w-full lg:order-2 lg:h-[501px] lg:w-[563px]" style="aspect-ratio: 343 / 305;<?php if ($feat2_image) echo ' background-image: url(' . esc_url($feat2_image['url']) . '); background-size: cover; background-position: center;'; ?>"></div>
      </div>
    </div>
  </div>

  <?php
  $feat3_title = get_field('feature_3_title') ?: ($is_en ? 'Premium Furnishings & Appliances' : 'こだわりの高級家具・家電');
  $feat3_desc  = get_field('feature_3_description') ?: '';
  $feat3_image = get_field('feature_3_image');
  ?>
  <!-- Feature 3 -->
  <div class="mt-[40px] lg:mt-[120px]">
    <div class="mx-auto w-full lg:max-w-[1232px] lg:px-[16px]">
      <div class="flex flex-col gap-[24px] lg:flex-row lg:items-center lg:gap-[100px]">
        <div class="feature-3-img fade-target w-full lg:h-[501px] lg:w-[563px]" style="aspect-ratio: 343 / 305;<?php if ($feat3_image) echo ' background-image: url(' . esc_url($feat3_image['url']) . '); background-size: cover; background-position: center;'; ?>"></div>
        <div class="w-full max-w-[538px] lg:w-[538px] flex flex-col gap-[16px]">
          <h3 class="mt-0 text-[24px] leading-[32px] tracking-[2.4px] text-[#483F38] font-medium font-['Shippori_Mincho']"><?php echo esc_html($feat3_title); ?></h3>
          <?php if ($feat3_desc) : ?>
          <p class="mt-0 mb-[40px] text-[14px] leading-[30px] tracking-[1.4px] text-[#475569] font-['Shippori_Mincho'] lg:mb-0 lg:w-[525px]">
            <?php echo nl2br(esc_html($feat3_desc)); ?>
          </p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-[80px] lg:mt-[120px]">
    <div class="rooms-cover-bg fade-target h-[192px] w-screen -mx-[16px] lg:h-[540px] lg:mx-0"></div>
  </div>
</section>

<!-- Information -->
<?php
$info_subtitle = get_field('info_subtitle');
$info_fields = array(
    array('label_field' => 'info_size_label',      'value_field' => 'info_size',      'default_label' => ($is_en ? 'Size' : '広さ'),          'default_value' => 'XXX㎡'),
    array('label_field' => 'info_capacity_label',   'value_field' => 'info_capacity',  'default_label' => ($is_en ? 'Capacity' : '定員'),      'default_value' => '1~6名'),
    array('label_field' => 'info_layout_label',     'value_field' => 'info_layout',    'default_label' => ($is_en ? 'Layout' : '間取り'),       'default_value' => ''),
    array('label_field' => 'info_bed_label',        'value_field' => 'info_bed',       'default_label' => ($is_en ? 'Bed Type' : 'ベッドタイプ'), 'default_value' => ''),
    array('label_field' => 'info_amenities_label',  'value_field' => 'info_amenities', 'default_label' => ($is_en ? 'Amenities' : '設備・備品'), 'default_value' => ''),
    array('label_field' => 'info_parking_label',    'value_field' => 'info_parking',   'default_label' => ($is_en ? 'Parking' : '駐車場'),      'default_value' => ''),
);
?>
<section class="bg-[#FAFAFA] px-[16px] pt-[80px] pb-[80px] lg:py-[150px]">
  <div class="mx-auto w-full lg:flex lg:max-w-[1100px] lg:items-center lg:gap-[100px]">
    <div class="mx-auto w-full max-w-[343px] text-left lg:w-[334px] lg:self-center">
      <p class="text-[36px] leading-[54px] tracking-[3.6px] text-[#436C5E] font-medium font-['Shippori_Mincho'] lg:text-[32px] lg:leading-[54px] lg:tracking-[3.6px]">INFORMATION</p>
      <?php if ($info_subtitle !== '') : ?>
      <p class="mt-[16px] text-[14px] leading-[22.75px] tracking-[2.1px] text-[#436C5E] font-['Shippori_Mincho'] lg:mt-[8px]"><?php echo esc_html($info_subtitle ?: ($is_en ? 'Facility Info' : '設備情報')); ?></p>
      <?php endif; ?>
    </div>

    <div class="mt-[40px] w-full lg:mt-0 lg:w-[665px]">
      <?php foreach ($info_fields as $f) :
        $label = get_field($f['label_field']) ?: $f['default_label'];
        $value = get_field($f['value_field']) ?: $f['default_value'];
        if (!$value) continue;
      ?>
      <div class="flex flex-wrap items-center gap-[16px] border-b border-[#D1C7BF] py-[16px] text-[12px] leading-[20px] tracking-[1.4px] text-[#483F38] font-['Shippori_Mincho'] lg:flex-nowrap lg:items-center lg:gap-[159px] lg:py-[16px]">
        <div class="w-[134px] shrink-0 text-[#483F38]"><?php echo esc_html($label); ?></div>
        <div class="w-full whitespace-pre-line text-[#483F38] lg:flex-1"><?php echo esc_html($value); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Amenities -->
<?php
$amenities_subtitle = get_field('amenities_subtitle');
$amenities_text     = get_field('amenities_text') ?: ($is_en ? 'We have carefully selected premium amenities for a quality stay.' : '上質な滞在を演出する、こだわりのアメニティをご用意しております。');
?>
<section class="px-[16px] py-[80px] lg:py-[150px]">
  <div class="mx-auto w-full max-w-full text-center lg:max-w-[1232px]">
    <div class="flex flex-col items-center">
      <p class="text-[32px] leading-[54px] tracking-[3.6px] lg:text-[32px] lg:leading-[54px] lg:tracking-[3.6px] text-[#436C5E] font-medium font-['Shippori_Mincho']">AMENITIES</p>
      <?php if ($amenities_subtitle !== false && $amenities_subtitle !== '') : ?>
      <p class="mt-[8px] text-[14px] leading-[22.75px] tracking-[2.1px] text-[#436C5E] font-['Shippori_Mincho']"><?php echo esc_html($amenities_subtitle); ?></p>
      <?php endif; ?>
      <p class="mt-[32px] text-[15px] leading-[27px] tracking-[1.6px] lg:text-[16px] lg:leading-[32px] lg:tracking-[1px] text-[#483F38] font-['Shippori_Mincho']"><?php echo esc_html($amenities_text); ?></p>
    </div>
  </div>

  <div class="mt-[40px] lg:mt-[120px]">
    <div class="amenities-img-1 fade-target h-[173px] w-screen -mx-[16px] md:h-[calc(100vw*0.46)] lg:h-[663px] lg:w-screen lg:-mx-[16px]"></div>
  </div>

  <div class="mx-auto mt-[40px] w-full max-w-[calc(100vw-32px)] md:max-w-[calc(100vw-32px)] lg:mt-[120px] lg:max-w-[1232px]">
    <div class="grid grid-cols-2 gap-[32px] md:grid-cols-3 md:gap-[24px] lg:grid-cols-5 lg:gap-[24px]">
      <?php for ($i = 1; $i <= 5; $i++) :
        $a_name  = get_field('amenity_' . $i . '_name');
        $a_image = get_field('amenity_' . $i . '_image');
        $defaults = array(
          1 => array('images/rooms/amenities-item-1.jpg', 'BALMUDA'),
          2 => array('images/rooms/amenities-item-2.jpg', 'ル・クルーゼ'),
          3 => array('images/rooms/amenities-item-3.jpg', 'レプロナイザー'),
          4 => array('images/rooms/amenities-item-4.jpg', 'トルコ製ソファ'),
          5 => array('images/rooms/amenities-item-5.jpg', 'Aesop'),
        );
        $img_url = $a_image ? esc_url($a_image['url']) : hotel_asset($defaults[$i][0]);
        $name    = $a_name ?: $defaults[$i][1];
      ?>
      <div class="flex flex-col items-center text-center">
        <img src="<?php echo $img_url; ?>" alt="<?php echo esc_attr($name); ?>" class="fade-target aspect-square w-full max-w-[calc((100vw-64px)/2)] rounded-[8px] object-cover md:min-h-[153px] lg:h-[216px] lg:w-full lg:max-w-none" />
        <p class="mt-[8px] text-[16px] leading-[32px] tracking-[1px] text-[#483F38] font-['Shippori_Mincho']"><?php echo esc_html($name); ?></p>
      </div>
      <?php endfor; ?>
    </div>
  </div>

  <div class="mt-[40px] lg:mt-[120px]">
    <div class="mx-auto max-w-[1440px] amenities-bleed-left">
      <div class="amenities-img-2 fade-target h-[150px] w-[359px] -ml-[16px] md:h-[calc(100vw*0.22)] md:w-[calc(100vw*0.75)] lg:h-[320px] lg:w-full lg:ml-0"></div>
    </div>
  </div>
  <div class="mt-[40px] lg:mt-[80px]">
    <div class="mx-auto flex max-w-[1440px] justify-end w-screen -mx-[16px] lg:w-full lg:mx-0 amenities-bleed-right">
      <div class="amenities-img-3 fade-target h-[150px] w-[296px] md:h-[calc(100vw*0.26)] md:w-[calc(100vw*0.62)] lg:h-[371px] lg:w-full"></div>
    </div>
  </div>
</section>

<!-- Gallery -->
<?php
$gallery_subtitle = get_field('gallery_subtitle');
$instagram_url    = get_field('instagram_url') ?: 'https://instagram.com';
$gallery_defaults = array(
  1 => 'images/rooms/gallery-left.jpg',
  2 => 'images/rooms/gallery-top-left.jpg',
  3 => 'images/rooms/gallery-top-right.jpg',
  4 => 'images/rooms/gallery-bottom-left.jpg',
  5 => 'images/rooms/gallery-bottom-right.jpg',
);
?>
<section class="bg-[#FAFAFA] px-4 py-[80px] lg:px-4 lg:py-[150px]">
  <div class="mx-auto max-w-[1232px] text-center">
    <p class="text-[32px] leading-[36px] tracking-[2.4px] lg:text-[32px] lg:leading-[54px] lg:tracking-[3.6px] text-[#436C5E] font-medium font-['Shippori_Mincho']">GALLERY</p>
    <?php if ($gallery_subtitle !== false && $gallery_subtitle !== '') : ?>
    <p class="mt-[8px] text-[14px] leading-[22.75px] tracking-[2.1px] text-[#436C5E] font-['Shippori_Mincho']"><?php echo esc_html($gallery_subtitle); ?></p>
    <?php endif; ?>
  </div>

  <div class="mx-auto mt-[40px] max-w-[1232px] lg:mt-[120px]">
    <div class="flex flex-col gap-[16px] lg:flex-row lg:gap-[32px]">
      <?php $g1 = get_field('gallery_1'); ?>
      <img src="<?php echo $g1 ? esc_url($g1['url']) : hotel_asset($gallery_defaults[1]); ?>" alt="<?php echo $is_en ? 'Gallery 1' : 'ギャラリー1'; ?>" class="fade-target h-[240px] w-full rounded-[8px] object-cover lg:h-[600px] lg:w-[600px]" />
      <div class="grid w-full grid-cols-2 gap-[16px] lg:w-[600px]">
        <?php for ($i = 2; $i <= 5; $i++) :
          $g = get_field('gallery_' . $i);
          $src = $g ? esc_url($g['url']) : hotel_asset($gallery_defaults[$i]);
        ?>
        <img src="<?php echo $src; ?>" alt="<?php echo ($is_en ? 'Gallery ' : 'ギャラリー') . $i; ?>" class="fade-target h-[140px] w-full rounded-[8px] object-cover lg:h-[292px]" />
        <?php endfor; ?>
      </div>
    </div>
  </div>

  <div class="mt-[40px] flex justify-center lg:mt-[80px]">
    <a href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex h-[43px] w-[185px] items-center justify-center rounded-full border border-[#436C5E] text-[#436C5E] text-[14px] leading-[22.75px] tracking-[2.1px] font-['Shippori_Mincho'] hover:bg-[#436C5E] hover:text-white transition-colors">
      Instagram
    </a>
  </div>
</section>

<!-- Reservation -->
<section class="relative lg:py-[150px] lg:px-[272px] py-[80px] px-[16px]">
  <div class="absolute inset-0 overflow-hidden">
    <img src="<?php echo hotel_asset('images/rooms/reservation-bg.jpg'); ?>" alt="" class="hidden lg:block absolute inset-0 w-full h-full object-cover" data-no-fade />
    <img src="<?php echo hotel_asset('images/rooms/reservation-bg.jpg'); ?>" alt="" class="lg:hidden absolute inset-0 w-full h-full object-cover object-[position:34.8%_0%]" data-no-fade />
  </div>
  <div class="absolute inset-0 bg-black/16 mix-blend-multiply"></div>
  <div class="relative z-10 w-full">
    <div class="flex flex-col lg:gap-[32px] gap-[32px] items-center">
      <div class="text-center space-y-[8px]">
        <h2 class="lg:text-[32px] lg:leading-[54px] lg:tracking-[3.6px] text-[32px] leading-[54px] tracking-[3.6px] font-medium text-white font-['Shippori_Mincho']">RESERVATION</h2>
        <?php if ($rsv_subtitle !== false && $rsv_subtitle !== '') : ?>
        <p class="text-[14px] leading-[20px] tracking-[1.4px] text-[#CBD5E1] font-['Shippori_Mincho']"><?php echo esc_html($rsv_subtitle); ?></p>
        <?php endif; ?>
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
