<?php
/**
 * Template Name: Plans
 */
$is_en = hotel_is_en();
$lang = $is_en ? 'en' : 'ja';
$is_en ? get_header('en') : get_header();

$kv_heading  = get_field('kv_heading') ?: 'PLAN';
$kv_image    = get_field('kv_image');
$plans_heading = get_field('plans_heading') ?: ($is_en ? 'Stay Plans' : '宿泊プランのご案内');
$plans_text    = get_field('plans_text') ?: '';

// Plan data
$p = array();
for ($i = 1; $i <= 2; $i++) {
    $p[$i] = array(
        'title'       => get_field('plan_' . $i . '_title') ?: '',
        'desc'        => get_field('plan_' . $i . '_description') ?: '',
        'image'       => get_field('plan_' . $i . '_image'),
        'feat1'       => get_field('plan_' . $i . '_feature_1') ?: '',
        'feat2'       => get_field('plan_' . $i . '_feature_2') ?: '',
        'detail_text' => get_field('plan_' . $i . '_detail_text') ?: ($is_en ? 'View details' : '詳細はこちら'),
        'detail_url'  => get_field('plan_' . $i . '_detail_url') ?: '/plan-detail',
    );
}

$rsv_subtitle = get_field('rsv_subtitle');
$rsv_text     = get_field('rsv_text') ?: ($is_en ? "Check availability and book easily online.\nEnjoy a special time with us." : "オンラインで簡単に\n空室確認・ご予約が可能です。\n特別なひとときをお過ごしください。");
$rsv_btn_text = get_field('rsv_btn_text') ?: ($is_en ? 'BOOK YOUR STAY' : 'ご予約はこちら');
$rsv_btn_url  = get_field('rsv_btn_url') ?: '/404';

$kv_src = $kv_image ? esc_url($kv_image['url']) : hotel_asset('images/plans/plan-kv.jpg');
$p1_img = $p[1]['image'] ? esc_url($p[1]['image']['url']) : hotel_asset('images/plans/plan-onsen.jpg');
$p2_img = $p[2]['image'] ? esc_url($p[2]['image']['url']) : hotel_asset('images/plans/plan-miyazaki.jpg');
$p1_alt = $p[1]['title'] ?: ($is_en ? 'Private Onsen Plan' : '貸切温泉付きプラン');
$p2_alt = $p[2]['title'] ?: ($is_en ? 'Miyazaki Delight Plan' : '宮崎堪能プラン');
?>

<!-- KV -->
<section class="relative h-[380px] lg:h-[640px] overflow-hidden">
  <img src="<?php echo $kv_src; ?>" alt="" class="plans-kv-img kv-fade-bg absolute max-w-none object-cover" />
  <div class="absolute inset-0 bg-[#483F38] kv-fade-overlay"></div>
  <div class="absolute inset-0 flex items-center justify-center translate-y-[20.5px] lg:translate-y-0">
    <h1 class="text-[32px] lg:text-[32px] leading-[54px] tracking-[3.6px] text-white/85 font-medium font-['Shippori_Mincho']">
      <?php echo esc_html($kv_heading); ?>
    </h1>
  </div>
</section>

<!-- Plan Text -->
<section class="bg-[#FAFAFA] px-[16px] py-[80px] lg:px-[256px] lg:py-[150px]">
  <div class="mx-auto flex w-full max-w-[343px] flex-col items-center gap-[24px] text-center text-[#436C5E] font-['Shippori_Mincho'] lg:max-w-[540px] lg:gap-[32px]">
    <h2 class="text-[32px] lg:text-[32px] leading-[48px] lg:leading-[40px] tracking-[3.6px] font-medium">
      <?php echo esc_html($plans_heading); ?>
    </h2>
    <?php if ($plans_text) : ?>
    <div class="flex flex-col justify-center text-[15px] lg:text-[16px] leading-[27px] lg:leading-[32px] tracking-[1.6px] lg:tracking-[1px] text-[#483F38] text-center lg:w-[540px] whitespace-pre-line">
<?php echo esc_html($plans_text); ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- Plan Section -->
<section class="bg-white px-[16px] pb-[80px] lg:px-0 lg:py-[150px] space-y-[80px] lg:space-y-[120px]">
  <!-- Plan 1 -->
  <div class="mx-auto flex flex-col gap-[32px] lg:flex-row lg:items-center lg:gap-0 max-w-[1440px]">
    <div class="plan-image-window plan-image-window-onsen mx-auto fade-target">
      <img src="<?php echo $p1_img; ?>" alt="<?php echo esc_attr($p1_alt); ?>" class="plan-onsen-img" />
    </div>
    <div class="plan-text-panel lg:w-[692px] lg:h-[700px] lg:relative">
      <div class="plan-text-inner lg:absolute lg:left-[96px] lg:top-[137px] lg:w-[500px]">
        <!-- SP -->
        <div class="space-y-[32px] lg:hidden">
          <div class="space-y-[16px]">
            <h3 class="text-[24px] leading-[32px] tracking-[2.4px] text-[#483F38] font-medium font-['Shippori_Mincho']">
              <?php echo esc_html($p1_alt); ?>
            </h3>
            <div class="h-px w-[48px] bg-[#B99563]"></div>
          </div>
          <?php if ($p[1]['desc']) : ?>
          <div class="text-[14px] leading-[22.75px] tracking-[2.1px] text-[#483F38] font-['Shippori_Mincho'] whitespace-pre-line"><?php echo esc_html($p[1]['desc']); ?></div>
          <?php endif; ?>
          <?php if ($p[1]['feat1']) : ?>
          <div class="h-[45px] w-full border-t border-[#B99563]">
            <div class="flex items-center gap-[12px] pt-[18px]">
              <img src="<?php echo hotel_asset('images/icons/plan-bath.svg'); ?>" alt="" class="h-[24px] w-[20px]" style="transform: scaleY(-1);" />
              <span class="text-[14px] leading-[22.75px] tracking-[2.1px] text-[#483F38] font-['Shippori_Mincho'] whitespace-nowrap">
                <?php echo esc_html($p[1]['feat1']); ?>
              </span>
            </div>
          </div>
          <?php endif; ?>
          <a href="<?php echo esc_url($p[1]['detail_url']); ?>" class="inline-flex items-center justify-center rounded-full border border-[#436C5E] px-[49px] py-[10px] text-[14px] leading-[22.75px] tracking-[2.1px] text-[#436C5E] font-['Shippori_Mincho'] hover:bg-[#436C5E] hover:text-white transition-colors">
            <?php echo esc_html($p[1]['detail_text']); ?>
          </a>
        </div>

        <!-- PC -->
        <div class="hidden lg:block space-y-[62px]">
          <div class="space-y-[32px]">
            <div class="space-y-[16px]">
              <h3 class="text-[24px] leading-[32px] tracking-[2.4px] text-[#483F38] font-medium font-['Shippori_Mincho']">
                <?php echo esc_html($p1_alt); ?>
              </h3>
              <div class="h-px w-[48px] bg-[#B99563]"></div>
            </div>
            <?php if ($p[1]['desc']) : ?>
            <p class="plan-text-desc text-[14px] leading-[22.75px] lg:leading-[30px] tracking-[2.1px] lg:tracking-[1.4px] text-[#483F38] lg:text-[#475569] font-['Shippori_Mincho'] lg:w-[445px] whitespace-pre-line"><?php echo esc_html($p[1]['desc']); ?></p>
            <?php endif; ?>
            <?php if ($p[1]['feat1'] || $p[1]['feat2']) : ?>
            <div class="border-t border-[#B99563] pt-[18px]">
              <div class="flex items-center gap-[8px]">
                <?php if ($p[1]['feat1']) : ?>
                <img src="<?php echo hotel_asset('images/icons/plan-bath.svg'); ?>" alt="" class="h-[24px] w-[20px]" style="transform: scaleY(-1);" />
                <span class="text-[12px] leading-[48px] tracking-[4.8px] text-[#483F38] font-['Shippori_Mincho']"><?php echo esc_html($p[1]['feat1']); ?></span>
                <?php endif; ?>
                <?php if ($p[1]['feat2']) : ?>
                <img src="<?php echo hotel_asset('images/icons/plan-wine.svg'); ?>" alt="" class="h-[24px] w-[20px]" style="transform: scaleY(-1);" />
                <span class="text-[12px] leading-[48px] tracking-[4.8px] text-[#483F38] font-['Shippori_Mincho']"><?php echo esc_html($p[1]['feat2']); ?></span>
                <?php endif; ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <a href="<?php echo esc_url($p[1]['detail_url']); ?>" class="inline-flex items-center justify-center rounded-full border border-[#436C5E] px-[49px] py-[10px] text-[14px] leading-[22.75px] tracking-[2.1px] text-[#436C5E] font-['Shippori_Mincho'] hover:bg-[#436C5E] hover:text-white transition-colors">
            <?php echo esc_html($p[1]['detail_text']); ?>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Plan 2 -->
  <div class="mx-auto flex flex-col gap-[32px] lg:flex-row-reverse lg:items-center lg:gap-0 max-w-[1440px]">
    <div class="plan-image-window plan-image-window-miyazaki mx-auto fade-target">
      <img src="<?php echo $p2_img; ?>" alt="<?php echo esc_attr($p2_alt); ?>" class="plan-miyazaki-img" />
    </div>
    <div class="plan-text-panel lg:w-[692px] lg:h-[701px] lg:relative">
      <div class="plan-text-inner lg:absolute lg:left-[96px] lg:top-[135px] lg:w-[500px] space-y-[32px] lg:space-y-[62px]">
        <div class="space-y-[32px] lg:space-y-[32px]">
          <div class="space-y-[16px]">
            <h3 class="text-[24px] leading-[32px] tracking-[2.4px] text-[#483F38] font-medium font-['Shippori_Mincho']">
              <?php echo esc_html($p2_alt); ?>
            </h3>
            <div class="h-px w-[48px] bg-[#B99563]"></div>
          </div>
          <?php if ($p[2]['desc']) : ?>
          <p class="plan-text-desc text-[14px] leading-[22.75px] lg:leading-[30px] tracking-[2.1px] lg:tracking-[1.4px] text-[#483F38] lg:text-[#475569] font-['Shippori_Mincho'] lg:w-[451px] whitespace-pre-line"><?php echo esc_html($p[2]['desc']); ?></p>
          <?php endif; ?>
          <?php if ($p[2]['feat1'] || $p[2]['feat2']) : ?>
          <div class="border-t border-[#B99563] pt-[18px]">
            <div class="flex items-center gap-[32px]">
              <?php if ($p[2]['feat1']) : ?>
              <div class="flex items-center gap-[8px]">
                <img src="<?php echo hotel_asset('images/icons/plan-bbq.svg'); ?>" alt="" class="h-[24px] w-[20px]" style="transform: scaleY(-1);" />
                <span class="text-[14px] lg:text-[12px] leading-[22.75px] lg:leading-[48px] tracking-[2.1px] lg:tracking-[4.8px] text-[#483F38] font-['Shippori_Mincho']"><?php echo esc_html($p[2]['feat1']); ?></span>
              </div>
              <?php endif; ?>
              <?php if ($p[2]['feat2']) : ?>
              <div class="flex items-center gap-[8px]">
                <img src="<?php echo hotel_asset('images/icons/plan-wine.svg'); ?>" alt="" class="h-[24px] w-[20px]" style="transform: scaleY(-1);" />
                <span class="text-[14px] lg:text-[12px] leading-[22.75px] lg:leading-[48px] tracking-[2.1px] lg:tracking-[4.8px] text-[#483F38] font-['Shippori_Mincho']"><?php echo esc_html($p[2]['feat2']); ?></span>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
        <a href="<?php echo esc_url($p[2]['detail_url']); ?>" class="inline-flex items-center justify-center rounded-full border border-[#436C5E] px-[49px] py-[10px] text-[14px] leading-[22.75px] tracking-[2.1px] text-[#436C5E] font-['Shippori_Mincho'] hover:bg-[#436C5E] hover:text-white transition-colors">
          <?php echo esc_html($p[2]['detail_text']); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Reservation -->
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

<?php $is_en ? get_footer('en') : get_footer(); ?>
