<?php
/**
 * Template Name: Contact Complete
 */
$is_en = hotel_is_en();
$lang = $is_en ? 'en' : 'ja';
$is_en ? get_header('en') : get_header();
?>

<?php while (have_posts()) : the_post(); ?>
<section class="bg-[#FAFAFA] pt-[152px] pb-[80px] lg:pt-[222px] lg:pb-[150px]">
  <div class="mx-auto flex w-[343px] flex-col items-center gap-[40px] text-center font-['Shippori_Mincho'] lg:w-full lg:gap-[80px] lg:px-[256px]">
    <h1 class="text-[32px] leading-[48px] tracking-[3.6px] font-medium text-[#436C5E] lg:mx-auto lg:w-[616px] lg:text-[36px] lg:leading-[54px]">
      <?php the_title(); ?>
    </h1>
    <div class="text-[14px] leading-[22.75px] tracking-[2.1px] text-[#483F38] lg:w-[953px] lg:text-[16px] lg:leading-[32px] lg:tracking-[1px]">
      <?php the_content(); ?>
    </div>
    <a href="<?php echo esc_url(home_url('/' . $lang . '/')); ?>" class="inline-flex items-center justify-center rounded-full border border-[#B99563] bg-[#B99563] px-[49px] py-[10px] text-[14px] leading-[22.75px] tracking-[2.1px] text-white hover:bg-white hover:text-[#B99563] hover:border-[#B99563] transition-all duration-300">
      TOP
    </a>
  </div>
</section>
<?php endwhile; ?>

<?php $is_en ? get_footer('en') : get_footer(); ?>
