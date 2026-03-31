<?php
/**
 * Hotel Theme - デフォルトテンプレート
 * 固定ページにテンプレートが割り当てられていない場合のフォールバック
 */
get_header();
?>
<div class="bg-white min-h-screen font-shippori text-text-color">
  <main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="max-w-[928px] mx-auto px-[16px] py-[80px] lg:py-[150px]">
        <h1 class="text-[32px] leading-[48px] tracking-[3.6px] text-[#436C5E] font-medium font-['Shippori_Mincho'] text-center">
          <?php the_title(); ?>
        </h1>
        <div class="mt-[40px] text-[16px] leading-[32px] text-[#483F38] font-['Shippori_Mincho']">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </main>
</div>
<?php get_footer(); ?>
