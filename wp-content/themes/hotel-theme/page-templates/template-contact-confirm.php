<?php
/**
 * Template Name: Contact Confirm
 */
$is_en = hotel_is_en();
$lang = $is_en ? 'en' : 'ja';
$is_en ? get_header('en') : get_header();

$confirm_title   = get_field('confirm_title') ?: ($is_en ? 'Contact Confirmation' : 'お問い合わせ内容確認');
$confirm_desc    = get_field('confirm_description') ?: ($is_en ? 'Please review your information below and click "Submit" to send.' : "以下の内容でよろしければ、「送信する」ボタンを押してください。\n内容を修正する場合は、「戻る」ボタンを押して修正してください。");
$name_label      = get_field('name_label') ?: ($is_en ? 'Name' : 'お名前');
$email_label     = get_field('email_label') ?: ($is_en ? 'Email' : 'メールアドレス');
$message_label   = get_field('message_label') ?: ($is_en ? 'Message' : 'お問い合わせ内容');
$submit_text     = get_field('submit_text') ?: ($is_en ? 'Submit' : '送信する');
$back_text       = get_field('back_text') ?: ($is_en ? 'Back' : '戻る');
?>

<section class="bg-[#FAFAFA] pt-[141px] pb-[80px] lg:pt-[222px] lg:pb-[150px]">
  <div class="mx-auto flex w-full px-[20px] flex-col items-center gap-[40px] lg:w-[953px] lg:gap-[80px]">
    <div class="text-center text-[#436C5E] font-['Shippori_Mincho']">
      <h1 class="text-[32px] leading-[48px] tracking-[3.6px] font-medium lg:mx-auto lg:w-[616px] lg:text-[36px] lg:leading-[40px]">
        <?php echo esc_html($confirm_title); ?>
      </h1>
      <p class="mt-[32px] text-[14px] leading-[22.75px] tracking-[2.1px] text-[#483F38] lg:mx-auto lg:w-[953px] lg:text-[16px] lg:leading-[32px] lg:tracking-[1px]">
        <?php echo nl2br(esc_html($confirm_desc)); ?>
      </p>
    </div>

    <form id="confirm-form" data-lang="<?php echo esc_attr($lang); ?>" class="mx-auto rounded-[8px] bg-white px-[16px] py-[40px] shadow-sm lg:w-[672px] lg:px-[48px] lg:py-[56px]">
      <div class="space-y-[56px]">
        <div class="space-y-[32px] text-[16px] leading-[24px] tracking-[1.6px] font-['Shippori_Mincho']">
          <div class="space-y-[12px]">
            <p class="text-[#436C5E]"><?php echo esc_html($name_label); ?></p>
            <p class="text-[#483F38]" id="fullName"></p>
          </div>
          <div class="space-y-[12px]">
            <p class="text-[#436C5E]"><?php echo esc_html($email_label); ?></p>
            <p class="text-[#483F38]" id="email"></p>
          </div>
          <div class="space-y-[12px]">
            <p class="text-[#436C5E]"><?php echo esc_html($message_label); ?></p>
            <p class="text-[#483F38]" id="message"></p>
          </div>
        </div>

        <div class="flex flex-col items-center gap-[24px]">
          <button type="submit" class="inline-flex items-center justify-center rounded-full border border-[#B99563] bg-[#B99563] px-[49px] py-[10px] text-[14px] leading-[22.75px] tracking-[2.1px] text-white font-['Shippori_Mincho'] hover:bg-white hover:text-[#B99563] hover:border-[#B99563] transition-all duration-300">
            <?php echo esc_html($submit_text); ?>
          </button>
          <button type="button" onclick="history.back()" class="text-[12px] leading-[16px] tracking-[1.2px] text-[#475569] font-['Shippori_Mincho'] hover:opacity-60 transition-opacity">
            <?php echo esc_html($back_text); ?>
          </button>
        </div>
      </div>
    </form>
  </div>
</section>

<?php $is_en ? get_footer('en') : get_footer(); ?>
