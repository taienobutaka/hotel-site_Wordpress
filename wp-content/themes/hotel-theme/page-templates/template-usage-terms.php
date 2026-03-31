<?php
/**
 * Template Name: Usage Terms
 */
$is_en = hotel_is_en();
$lang = $is_en ? 'en' : 'ja';
$is_en ? get_header('en') : get_header();
?>

<?php while (have_posts()) : the_post(); ?>
<section class="bg-[#FAFAFA] pb-[80px] pt-[calc(var(--header-height,72px)+80px)] lg:pt-[222px] lg:pb-[150px] lg:px-[256px]">
  <div class="flex w-full flex-col items-center gap-[40px] font-['Shippori_Mincho'] px-[16px] lg:px-0 lg:gap-[80px]">
    <h1 class="text-center text-[32px] leading-[48px] tracking-[3.6px] text-[#436C5E] font-medium lg:w-[480px] lg:text-[36px] lg:leading-[54px]">
      <?php the_title(); ?>
    </h1>
    <div class="text-center text-[14px] leading-[22.75px] tracking-[2.1px] text-[#483F38] whitespace-normal lg:text-left lg:whitespace-pre-line lg:w-full lg:text-[16px] lg:leading-[32px] lg:tracking-[1.6px]">
      <?php the_content(); ?>
    </div>
    <a href="<?php echo esc_url(home_url('/' . $lang . '/')); ?>" class="inline-flex items-center justify-center rounded-full border border-[#B99563] bg-[#B99563] px-[49px] py-[10px] text-[14px] leading-[22.75px] tracking-[2.1px] text-white hover:bg-white hover:text-[#B99563] hover:border-[#B99563] transition-all duration-300">
      <span class="lg:hidden">TOP</span>
      <span class="hidden lg:inline"><?php echo $is_en ? 'Back' : '戻る'; ?></span>
    </a>
  </div>
</section>
<?php endwhile; ?>

<?php $is_en ? get_footer('en') : get_footer(); ?>
