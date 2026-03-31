<?php
/**
 * Template Name: FAQ
 */
$is_en = hotel_is_en();
$lang = $is_en ? 'en' : 'ja';
$is_en ? get_header('en') : get_header();

$faq_heading = get_field('faq_heading') ?: ($is_en ? 'FAQ' : 'よくある質問');
$faq_count   = (int)(get_field('faq_count') ?: 7);
?>

<section class="bg-[#FAFAFA] pb-[80px] pt-[calc(var(--header-height,72px)+80px)] px-[16px] lg:pt-[222px] lg:pb-[150px] lg:px-[256px]">
  <div class="mx-auto flex w-full max-w-[343px] flex-col items-center gap-[40px] font-['Shippori_Mincho'] lg:max-w-none lg:gap-[80px]">
    <h1 class="text-center text-[32px] leading-[48px] tracking-[3.6px] text-[#436C5E] font-medium lg:w-[480px] lg:text-[32px] lg:leading-[54px]">
      <?php echo esc_html($faq_heading); ?>
    </h1>

    <div class="flex w-full flex-col gap-[24px] lg:w-[774px] lg:gap-[40px] lg:items-start">
      <?php for ($i = 1; $i <= $faq_count; $i++) :
        $question = get_field('faq_' . $i . '_question');
        $answer   = get_field('faq_' . $i . '_answer');
        if (!$question) continue;
      ?>
      <div class="border-b border-[#D1C7BF] pb-[24px] lg:pb-[32px]">
        <div class="flex items-start gap-[4px] text-[#436C5E] lg:justify-start lg:text-left">
          <span class="text-[16px] leading-[32px] tracking-[1px] lg:text-[20px] lg:leading-[28px] lg:tracking-[1.6px]">Q.</span>
          <p class="text-[15px] leading-[27px] tracking-[1.6px] lg:text-[18px] lg:leading-[28px] lg:tracking-[1.6px]"><?php echo esc_html($question); ?></p>
        </div>
        <?php if ($answer) : ?>
        <p class="mt-[8px] pl-[24px] text-[14px] leading-[23px] tracking-[1.4px] text-[#483F38] lg:pl-[32px] lg:text-[16px] lg:leading-[26px] lg:tracking-[1.6px] lg:text-left">
          A. <?php echo nl2br(esc_html($answer)); ?>
        </p>
        <?php endif; ?>
      </div>
      <?php endfor; ?>
    </div>

    <a href="<?php echo esc_url(home_url('/' . $lang . '/')); ?>" class="inline-flex items-center justify-center rounded-full border border-[#B99563] bg-[#B99563] px-[49px] py-[10px] text-[14px] leading-[22.75px] tracking-[2.1px] text-white hover:bg-white hover:text-[#B99563] hover:border-[#B99563] transition-all duration-300">
      <span class="lg:hidden">TOP</span>
      <span class="hidden lg:inline"><?php echo $is_en ? 'Back' : '戻る'; ?></span>
    </a>
  </div>
</section>

<?php $is_en ? get_footer('en') : get_footer(); ?>
