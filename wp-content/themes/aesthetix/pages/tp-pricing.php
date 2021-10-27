<?php
/*
Template Name: Template Pricing
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php $pricing_field = get_fields(); ?>
<section class="main">
    <div class="container">
        <h1 class="title"><span><?php the_title(); ?></span> <?php the_title(); ?></h1>
    </div>
</section>
<section class="pricing-tabs">
    <ul class="tabs clearfix" data-tabgroup="third-tab-group">
        <li><a href="#tabl1" class="active"><?php echo $pricing_field['tab_name_one'] ?></a></li>
        <li><a href="#tabl2"><?php echo $pricing_field['tab_name_two'] ?></a></li>
        <li><a href="#tabl3"><?php echo $pricing_field['tab_name_three'] ?></a></li>
        <li><a href="#tabl4"><?php echo $pricing_field['tab_name_four'] ?></a></li>
        <li><a href="#tabl5"><?php echo $pricing_field['tab_name_five'] ?></a></li>
        <li><a href="#tabl6"><?php echo $pricing_field['tab_name_six'] ?></a></li>
        <li><a href="#tabl7"><?php echo $pricing_field['tab_name_seven'] ?></a></li>
        <li><a href="#tabl8"><?php echo $pricing_field['tab_name_eight'] ?></a></li>
        <li><a href="#tabl9"><?php echo $pricing_field['tab_name_nine'] ?></a></li>
        <li><a href="#tabl10"><?php echo $pricing_field['tab_name_ten'] ?></a></li>
        <li><a href="#tabl11"><?php echo $pricing_field['tab_name_eleven'] ?></a></li>
    </ul>
    <section id="third-tab-group" class="tabgroup">
        <div class="contentBlock" id="tabl1">
            <ul class="first">
                <li>
                    <div class="service">Service</div>
                    <div class="price">Per session</div>
                    <div class="course">Course of 6 sessions</div>
                </li>
                <?php
                $price = get_field('list_one');
                if (isset($price) && !empty($price)) {
                    foreach ($price as $key => $value) {
                        ?>
                        <li>
                            <div class="service"><?php echo $value['services'] ?></div>
                            <div class="price"><?php echo $value['per_session'] ?></div>
                            <div class="course"><?php echo $value['course_of_6_sessions'] ?></div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="contentBlock" id="tabl2">
            <ul class="first">
                <li>
                    <div class="service">Service</div>
                    <div class="price">Per session</div>
                    <div class="course">Course of 6 sessions</div>
                </li>
                <?php
                $price = get_field('list_two');
                if (isset($price) && !empty($price)) {
                    foreach ($price as $key => $value) {
                        ?>
                        <li>
                            <div class="service"><?php echo $value['services'] ?></div>
                            <div class="price"><?php echo $value['per_session'] ?></div>
                            <div class="course"><?php echo $value['course_of_6_sessions'] ?></div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="contentBlock" id="tabl3">
            <ul class="first">
                <li>
                    <div class="service">Service</div>
                    <div class="price">Per session</div>
                    <div class="course">Course of 6 sessions</div>
                </li>
                <?php
                $price = get_field('list_three');
                if (isset($price) && !empty($price)) {
                    foreach ($price as $key => $value) {
                        ?>
                        <li>
                            <div class="service"><?php echo $value['services'] ?></div>
                            <div class="price"><?php echo $value['per_session'] ?></div>
                            <div class="course"><?php echo $value['course_of_6_sessions'] ?></div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="contentBlock" id="tabl4">
            <ul class="first">
                <li>
                    <div class="service">Service</div>
                    <div class="price">Per session</div>
                    <div class="course">Course of 6 sessions</div>
                </li>
                <?php
                $price = get_field('list_four');
                if (isset($price) && !empty($price)) {
                    foreach ($price as $key => $value) {
                        ?>
                        <li>
                            <div class="service"><?php echo $value['services'] ?></div>
                            <div class="price"><?php echo $value['per_session'] ?></div>
                            <div class="course"><?php echo $value['course_of_6_sessions'] ?></div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="contentBlock" id="tabl5">
            <ul class="first">
                <li>
                    <div class="service">Service</div>
                    <div class="price">Per session</div>
                    <div class="course">Course of 6 sessions</div>
                </li>
                <?php
                $price = get_field('list_five');
                if (isset($price) && !empty($price)) {
                    foreach ($price as $key => $value) {
                        ?>
                        <li>
                            <div class="service"><?php echo $value['services'] ?></div>
                            <div class="price"><?php echo $value['per_session'] ?></div>
                            <div class="course"><?php echo $value['course_of_6_sessions'] ?></div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="contentBlock" id="tabl6">
            <ul class="first">
                <li>
                    <div class="service">Service</div>
                    <div class="price">Per session</div>
                    <div class="course">Course of 6 sessions</div>
                </li>
                <?php
                $price = get_field('list_six');
                if (isset($price) && !empty($price)) {
                    foreach ($price as $key => $value) {
                        ?>
                        <li>
                            <div class="service"><?php echo $value['services'] ?></div>
                            <div class="price"><?php echo $value['per_session'] ?></div>
                            <div class="course"><?php echo $value['course_of_6_sessions'] ?></div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="contentBlock" id="tabl7">
            <ul class="first">
                <li>
                    <div class="service">Service</div>
                    <div class="price">Per session</div>
                    <div class="course">Course of 6 sessions</div>
                </li>
                <?php
                $price = get_field('list_seven');
                if (isset($price) && !empty($price)) {
                    foreach ($price as $key => $value) {
                        ?>
                        <li>
                            <div class="service"><?php echo $value['services'] ?></div>
                            <div class="price"><?php echo $value['per_session'] ?></div>
                            <div class="course"><?php echo $value['course_of_6_sessions'] ?></div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="contentBlock" id="tabl8">
            <ul class="first">
                <li>
                    <div class="service">Service</div>
                    <div class="price">Per session</div>
                    <div class="course">Course of 6 sessions</div>
                </li>
                <?php
                $price = get_field('list_eight');
                if (isset($price) && !empty($price)) {
                    foreach ($price as $key => $value) {
                        ?>
                        <li>
                            <div class="service"><?php echo $value['services'] ?></div>
                            <div class="price"><?php echo $value['per_session'] ?></div>
                            <div class="course"><?php echo $value['course_of_6_sessions'] ?></div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="contentBlock" id="tabl9">
            <ul class="first">
                <li>
                    <div class="service">Service</div>
                    <div class="price">Per session</div>
                    <div class="course">Course of 6 sessions</div>
                </li>
                <?php
                $price = get_field('list_nine');
                if (isset($price) && !empty($price)) {
                    foreach ($price as $key => $value) {
                        ?>
                        <li>
                            <div class="service"><?php echo $value['services'] ?></div>
                            <div class="price"><?php echo $value['per_session'] ?></div>
                            <div class="course"><?php echo $value['course_of_6_sessions'] ?></div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="contentBlock" id="tabl10">
            <ul class="first">
                <li>
                    <div class="service">Service</div>
                    <div class="price">Per session</div>
                    <div class="course">Course of 6 sessions</div>
                </li>
                <?php
                $price = get_field('list_ten');
                if (isset($price) && !empty($price)) {
                    foreach ($price as $key => $value) {
                        ?>
                        <li>
                            <div class="service"><?php echo $value['services'] ?></div>
                            <div class="price"><?php echo $value['per_session'] ?></div>
                            <div class="course"><?php echo $value['course_of_6_sessions'] ?></div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="contentBlock" id="tabl11">
            <ul class="first">
                <li>
                    <div class="service">Service</div>
                    <div class="price">Per session</div>
                    <div class="course">Course of 6 sessions</div>
                </li>
                <?php
                $price = get_field('list_eleven');
                if (isset($price) && !empty($price)) {
                    foreach ($price as $key => $value) {
                        ?>
                        <li>
                            <div class="service"><?php echo $value['services'] ?></div>
                            <div class="price"><?php echo $value['per_session'] ?></div>
                            <div class="course"><?php echo $value['course_of_6_sessions'] ?></div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
    </section>
</section>
<section class="banner">
	<div class="wrapper">
		<h2><a class="openPayments" href="#"> <span >O% Interest Free</span> Payment Plans </a></h2>
		<p>Are you considering Cosmetic, Aesthetic, Orthodontic or Dental Implant work, but not sure about the best way
			to pay for it? If so, you might be interested in the interest free payment plans we offer to fund your
			treatment.</p>
	</div>
</section>
<section id="banner-block" class="banner-block">
	<div class="payments">
		<div class="wrapper">
			<h2>O% Interest Free Payment Plans<span>Payments</span></h2>
			<p class="info">Raj Wadhwani trading as Antwerp House Dental Practice is authorised and regulated by the
				Financial Conduct
				Authority FRN 676598</p>
			<p>Are you considering Cosmetic, Aesthetic, Orthodontic or Dental Implant work, but not sure about the best way
				to pay for it? If so, you might be interested in the interest free payment plans we offer to fund your
				treatment.</p>
			<span class="question">How do I apply?</span>
			<p>You will need to complete a simple, online credit application, which one of our staff can help you with. The
				information is transmitted to the lender immediately and a reply is usually received by return. You can then
				either sign a credit agreement that we print for you, or have it emailed for you to complete at home.</p>
			<span class="question">How much can I borrow?</span>
			<p>You can borrow between £350 and £50,000, subject to status. You must be over 21 to apply, and you must have
				lived in the UK for at least 3 years.</p>
			<span class="question">Do I have to pay a deposit?</span>
			<p>A deposit is not required, but if you want to pay one and so reduce the amount you borrow, this is completely
				up to you.</p>
		</div>
	</div>
	<div class="faq">
		<div class="wrapper">
			<span class="question">How much are the repayments?</span>
			<p>Obviously, this will depend on the amount you borrow and whether you pay a deposit. Our staff will show you,
				completely without obligation, the monthly repayments for your particular treatment.</p>
			<span class="info">Calculate for yourself the monthly repayments for your treatment by entering the cost in the Chrysalis calculator:</span>
			<a href="http://www.chrysalisfinance.com/calc/calc2.html?id=124621">Finance calculator</a>
			<span class="question">How do I make the repayments?</span>
			<p>The monthly payments are collected by Direct Debit, starting one month after you sign the credit agreement,
				and are subject the usual guarantee from your bank.</p>
			<span class="question">When can I start the treatment?</span>
			<p>Immediately – as soon as the credit agreement has been signed.</p>
			<span class="question">What if I decide that I don’t want the finance?</span>
			<p>There is a statutory ‘cooling off’ period of 14 days after signature during which you can cancel the credit
				agreement with no cost to you. However, if you have started any treatment which would have been financed,
				you will have to make other arrangements to pay for it. </p>
			<span class="question">Who provides the finance?</span>
			<p>The finance is arranged through Chrysalis Finance Ltd., a company authorised by the Financial Conduct Authority to carry out the regulated activity of credit broking under Firm Reference Number 631193, and the lender is Shawbrook Bank Plc.</p>
		</div>
	</div>
</section>
<?php get_template_part('template-part/form-page'); ?>
<?php get_template_part('template-part/find-us'); ?>
<?php get_footer(); ?>
