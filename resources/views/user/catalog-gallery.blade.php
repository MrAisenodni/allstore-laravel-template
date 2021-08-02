@extends('layout.user')

@section('content')

<!-- Main Content - start -->
<main>
	<section class="container">


		<ul class="b-crumbs">
			<li>
				<a href="index.html">
					Home
				</a>
			</li>
			<li>
				<a href="catalog-list.html">
					Catalog
				</a>
			</li>
			<li>
				<span>Women</span>
			</li>
		</ul>
		<h1 class="main-ttl"><span>Women</span></h1>
		<!-- Catalog Sidebar - start -->
		<div class="section-sb">

			<!-- Catalog Categories - start -->
			<div class="section-sb-current">
				<h3><a href="catalog-list.html">Women <span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
				<ul class="section-sb-list" id="section-sb-list">
					<li class="categ-1">
						<a href="catalog-list.html">
							<span class="categ-1-label">Knitwear</span>
						</a>
					</li>
					<li class="categ-1">
						<a href="catalog-list.html">
							<span class="categ-1-label">Dresses</span>
						</a>
					</li>
					<li class="categ-1 has_child">
						<a href="catalog-list.html">
							<span class="categ-1-label">Bags</span>
							<span class="section-sb-toggle"><span class="section-sb-ico"></span></span>
						</a>
						<ul>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Shoulder Bags</span>
								</a>
							</li>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Falabella</span>
								</a>
							</li>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Becks</span>
								</a>
							</li>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Clutches</span>
								</a>
							</li>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Travel Bags</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="categ-1 has_child">
						<a href="catalog-list.html">
							<span class="categ-1-label">Accessories</span>
							<span class="section-sb-toggle"><span class="section-sb-ico"></span></span>
						</a>
						<ul>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Sunglasses</span>
								</a>
							</li>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Tech Cases</span>
								</a>
							</li>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Jewelry</span>
								</a>
							</li>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Stella</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="categ-1">
						<a href="catalog-list.html">
							<span class="categ-1-label">Coats & Jackets</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- Catalog Categories - end -->

			<!-- Filter - start -->
			<div class="section-filter">
				<button id="section-filter-toggle" class="section-filter-toggle" data-close="Hide Filter" data-open="Show Filter">
					<span>Show Filter</span> <i class="fa fa-angle-down"></i>
				</button>
				<div class="section-filter-cont">
					<div class="section-filter-price">
						<div class="range-slider section-filter-price" data-min="0" data-max="1000" data-from="200" data-to="800" data-prefix="$" data-grid="false"></div>
					</div>
					<div class="section-filter-item">
						<p class="section-filter-ttl">Style <i class="fa fa-angle-down"></i></p>
						<div class="section-filter-fields">
							<p class="section-filter-field">
								<input id="section-filter-checkbox2-1" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox2-1">Work</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox2-2" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox2-2">Vintage</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox2-3" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox2-3">Cute</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox2-4" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox2-4">Novelty</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox2-5" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox2-5">Brief</label>
							</p>
						</div>
					</div>
					<div class="section-filter-item opened">
						<p class="section-filter-ttl">Material <i class="fa fa-angle-down"></i></p>
						<div class="section-filter-fields">
							<p class="section-filter-field">
								<input id="section-filter-checkbox3-1" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox3-1">Cotton</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox3-2" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox3-2">Spandex</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox3-3" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox3-3">Polyester</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox3-4" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox3-4">Acetate</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox3-5" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox3-5">Microfiber</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox3-6" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox3-6">Silk</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox3-7" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox3-7">Fur</label>
							</p>
						</div>
					</div>
					<div class="section-filter-item opened">
						<p class="section-filter-ttl">Color <i class="fa fa-angle-down"></i></p>
						<div class="section-filter-fields">
							<ul class="section-filter-color">
								<li class="active"><img src="img/color/red.jpg" alt="Red"></li>
								<li><img src="img/color/blue.jpg" alt="Blue"></li>
								<li><img src="img/color/green.jpg" alt="Green"></li>
								<li><img src="img/color/yellow.jpg" alt="Yellow"></li>
								<li><img src="img/color/purple.jpg" alt="Purple"></li>
							</ul>
						</div>
					</div>
					<div class="section-filter-item opened">
						<p class="section-filter-ttl">Decoration <i class="fa fa-angle-down"></i></p>
						<div class="section-filter-fields">
							<div class="section-filter-select">
								<select data-placeholder="Decoration" class="chosen-select">
									<option>Pattern</option>
									<option>Pockets</option>
									<option>Button</option>
									<option>Beading</option>
									<option>LOGO</option>
									<option>Spliced</option>
									<option>Letter</option>
									<option>Pleated</option>
									<option>Appliques</option>
									<option>Bow</option>
									<option>Criss-Cross</option>
									<option>Crystal</option>
									<option>Draped</option>
									<option>Embroidery</option>
									<option>Feathers</option>
									<option>Fur</option>
									<option>Flowers</option>
									<option>Lace</option>
									<option>Pearls</option>
									<option>Ruched</option>
									<option>Ruffles</option>
									<option>Sashes</option>
									<option>Ribbons</option>
									<option>Sequined</option>
									<option>Tassel</option>
									<option>Rivet</option>
									<option>Hole</option>
									<option>Hollow Out</option>
									<option>Embroidered Flares</option>
									<option>Cuffs</option>
									<option>Patches</option>
									<option>Fake Zippers</option>
									<option>Bleached</option>
									<option>Ripped</option>
									<option>Washed</option>
									<option>Patchwork</option>
									<option>Scratched</option>
									<option>Side Stripe</option>
									<option>None</option>
									<option>Character</option>
									<option>Other</option>
									<option>Badge</option>
									<option>Offset printing</option>
									<option>Patch pocket</option>
								</select>
							</div>
						</div>
					</div>
					<div class="section-filter-item opened">
						<p class="section-filter-ttl">Manufacturer country <i class="fa fa-angle-down"></i></p>
						<div class="section-filter-fields">
							<div class="section-filter-select">
								<select data-placeholder="Manufacturer country" class="chosen-select" multiple>
									<optgroup label="EUROPE">
										<option>Albania</option>
										<option>Andorra</option>
										<option>Armenia</option>
										<option>Austria</option>
										<option>Azerbaijan</option>
										<option>Belarus</option>
										<option>Belgium</option>
										<option>Bosnia and Herzegovina</option>
										<option>Bulgaria</option>
										<option>Croatia</option>
										<option>Cyprus</option>
										<option>Czech Republic</option>
										<option>Denmark</option>
										<option>Estonia</option>
										<option>Finland</option>
										<option>France</option>
										<option>Georgia</option>
										<option>Germany</option>
										<option>Greece</option>
										<option>Hungary</option>
										<option>Iceland</option>
										<option>Ireland</option>
										<option>Italy</option>
										<option>Latvia</option>
										<option>Liechtenstein</option>
										<option>Lithuania</option>
										<option>Luxembourg</option>
										<option>Macedonia</option>
										<option>Malta</option>
										<option>Moldova</option>
										<option>Monaco</option>
										<option>Montenegro</option>
										<option>Netherlands</option>
										<option>Norway</option>
										<option>Poland</option>
										<option>Portugal</option>
										<option>Romania</option>
										<option>San Marino</option>
										<option>Serbia</option>
										<option>Slovakia</option>
										<option>Slovenia</option>
										<option>Spain</option>
										<option>Sweden</option>
										<option>Switzerland</option>
										<option>Ukraine</option>
										<option>United Kingdom</option>
										<option>Vatican City</option>
									</optgroup>
									<optgroup label="ASIA">
										<option>Afghanistan</option>
										<option>Bahrain</option>
										<option>Bangladesh</option>
										<option>Bhutan</option>
										<option>Brunei</option>
										<option>Burma (Myanmar)</option>
										<option>Cambodia</option>
										<option>China</option>
										<option>East Timor</option>
										<option>India</option>
										<option>Indonesia</option>
										<option>Iran</option>
										<option>Iraq</option>
										<option>Israel</option>
										<option>Japan</option>
										<option>Jordan</option>
										<option>Kazakhstan</option>
										<option>Korea, North</option>
										<option>Korea, South</option>
										<option>Kuwait</option>
										<option>Kyrgyzstan</option>
										<option>Laos</option>
										<option>Lebanon</option>
										<option>Malaysia</option>
										<option>Maldives</option>
										<option>Mongolia</option>
										<option>Nepal</option>
										<option>Oman</option>
										<option>Pakistan</option>
										<option>Philippines</option>
										<option>Qatar</option>
										<option>Russian Federation</option>
										<option>Saudi Arabia</option>
										<option>Singapore</option>
										<option>Sri Lanka</option>
										<option>Syria</option>
										<option>Tajikistan</option>
										<option>Thailand</option>
										<option>Turkey</option>
										<option>Turkmenistan</option>
										<option>United Arab Emirates</option>
										<option>Uzbekistan</option>
										<option>Vietnam</option>
										<option>Yemen</option>
									</optgroup>
									<optgroup label="N. AMERICA">
										<option>Antigua and Barbuda</option>
										<option>Bahamas</option>
										<option>Barbados</option>
										<option>Belize</option>
										<option>Canada</option>
										<option>Costa Rica</option>
										<option>Cuba</option>
										<option>Dominica</option>
										<option>Dominican Republic</option>
										<option>El Salvador</option>
										<option>Grenada</option>
										<option>Guatemala</option>
										<option>Haiti</option>
										<option>Honduras</option>
										<option>Jamaica</option>
										<option>Mexico</option>
										<option>Nicaragua</option>
										<option>Panama</option>
										<option>Saint Kitts and Nevis</option>
										<option>Saint Lucia</option>
										<option>Saint Vincent and the Grenadines</option>
										<option>Trinidad and Tobago</option>
										<option>United States</option>
									</optgroup>
									<optgroup label="S. AMERICA">
										<option>Argentina</option>
										<option>Bolivia</option>
										<option>Brazil</option>
										<option>Chile</option>
										<option>Colombia</option>
										<option>Ecuador</option>
										<option>Guyana</option>
										<option>Paraguay</option>
										<option>Peru</option>
										<option>Suriname</option>
										<option>Uruguay</option>
										<option>Venezuela</option>
									</optgroup>
									<optgroup label="AFRICA">
										<option>Algeria</option>
										<option>Angola</option>
										<option>Benin</option>
										<option>Botswana</option>
										<option>Burkina</option>
										<option>Burundi</option>
										<option>Cameroon</option>
										<option>Cape Verde</option>
										<option>Central African Republic</option>
										<option>Chad</option>
										<option>Comoros</option>
										<option>Congo</option>
										<option>Congo</option>
										<option>Djibouti</option>
										<option>Egypt</option>
										<option>Equatorial Guinea</option>
										<option>Eritrea</option>
										<option>Ethiopia</option>
										<option>Gabon</option>
										<option>Gambia</option>
										<option>Ghana</option>
										<option>Guinea</option>
										<option>Guinea-Bissau</option>
										<option>Ivory Coast</option>
										<option>Kenya</option>
										<option>Lesotho</option>
										<option>Liberia</option>
										<option>Libya</option>
										<option>Madagascar</option>
										<option>Malawi</option>
										<option>Mali</option>
										<option>Mauritania</option>
										<option>Mauritius</option>
										<option>Morocco</option>
										<option>Mozambique</option>
										<option>Namibia</option>
										<option>Niger</option>
										<option>Nigeria</option>
										<option>Rwanda</option>
										<option>Sao Tome and Principe</option>
										<option>Senegal</option>
										<option>Seychelles</option>
										<option>Sierra Leone</option>
										<option>Somalia</option>
										<option>South Africa</option>
										<option>South Sudan</option>
										<option>Sudan</option>
										<option>Swaziland</option>
										<option>Tanzania</option>
										<option>Togo</option>
										<option>Tunisia</option>
										<option>Uganda</option>
										<option>Zambia</option>
										<option>Zimbabwe</option>
									</optgroup>
									<optgroup label="OCEANIA">
										<option>Australia</option>
										<option>Fiji</option>
										<option>Kiribati</option>
										<option>Marshall Islands</option>
										<option>Micronesia</option>
										<option>Nauru</option>
										<option>New Zealand</option>
										<option>Palau</option>
										<option>Papua New Guinea</option>
										<option>Samoa</option>
										<option>Solomon Islands</option>
										<option>Tonga</option>
										<option>Tuvalu</option>
										<option>Vanuatu</option>
									</optgroup>
								</select>
							</div>
						</div>
					</div>
					<div class="section-filter-item">
						<p class="section-filter-ttl">Pattern Type <i class="fa fa-angle-down"></i></p>
						<div class="section-filter-fields">
							<p class="section-filter-field">
								<input id="section-filter-checkbox4-1" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox4-1">Solid</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox4-2" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox4-2">Patchwork</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox4-3" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox4-3">Dot</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox4-4" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox4-4">Print</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox4-5" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox4-5">Character</label>
							</p>
						</div>
					</div>
					<div class="section-filter-item">
						<p class="section-filter-ttl">Fit Type <i class="fa fa-angle-down"></i></p>
						<div class="section-filter-fields">
							<p class="section-filter-field">
								<input id="section-filter-checkbox5-1" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox5-1">Loose</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox5-2" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox5-2">Skinny</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox5-3" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox5-3">Regular</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox5-4" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox5-4">Straight</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox5-5" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox5-5">Boot Cut</label>
							</p>
						</div>
					</div>
					<div class="section-filter-item opened">
						<p class="section-filter-ttl">Fabric Type <i class="fa fa-angle-down"></i></p>
						<div class="section-filter-fields">
							<p class="section-filter-field">
								<input id="section-filter-radio1-1" value="on" type="radio" name="section-filter-radio1">
								<label class="section-filter-radio" for="section-filter-radio1-1">Velour</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-radio1-2" value="on" type="radio" name="section-filter-radio1">
								<label class="section-filter-radio" for="section-filter-radio1-2">Batik</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-radio1-3" value="on" type="radio" name="section-filter-radio1">
								<label class="section-filter-radio" for="section-filter-radio1-3">Chiffon</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-radio1-4" value="on" type="radio" name="section-filter-radio1">
								<label class="section-filter-radio" for="section-filter-radio1-4">Broadcloth</label>
							</p>
						</div>
					</div>
					<div class="section-filter-item">
						<p class="section-filter-ttl">Wash <i class="fa fa-angle-down"></i></p>
						<div class="section-filter-fields">
							<p class="section-filter-field">
								<input id="section-filter-checkbox6-1" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox6-1">Colored</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox6-2" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox6-2">Light</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox6-3" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox6-3">Medium</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox6-4" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox6-4">Stonewashed</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox6-5" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox6-5">White</label>
							</p>
							<p class="section-filter-field">
								<input id="section-filter-checkbox6-6" value="on" type="checkbox">
								<label class="section-filter-checkbox" for="section-filter-checkbox6-6">Distrressed</label>
							</p>
						</div>
					</div>
					<div class="section-filter-buttons">
						<input class="btn btn-themes" id="set_filter" name="set_filter" value="Apply filter" type="button">
						<input class="btn btn-link" id="del_filter" name="del_filter" value="Reset" type="button">
					</div>
				</div>
			</div>
			<!-- Filter - end -->

		</div>
		<!-- Catalog Sidebar - end -->
		<!-- Catalog Items | Gallery V1 - start -->
		<div class="section-cont">

			<!-- Catalog Topbar - start -->
			<div class="section-top">

				<!-- View Mode -->
				<ul class="section-mode">
					<li class="section-mode-gallery active"><a title="View mode: Gallery" href="catalog-gallery.html"></a></li>
					<li class="section-mode-list"><a title="View mode: List" href="catalog-list.html"></a></li>
					<li class="section-mode-table"><a title="View mode: Table" href="catalog-table.html"></a></li>
				</ul>

				<!-- Sorting -->
				<div class="section-sortby">
					<p>default sorting</p>
					<ul>
						<li>
							<a href="#">sort by popularity</a>
						</li>
						<li>
							<a href="#">low price to high</a>
						</li>
						<li>
							<a href="#">high price to low</a>
						</li>
						<li>
							<a href="#">by title A <i class="fa fa-angle-right"></i> Z</a>
						</li>
						<li>
							<a href="#">by title Z <i class="fa fa-angle-right"></i> A</a>
						</li>
						<li>
							<a href="#">default sorting</a>
						</li>
					</ul>
				</div>

				<!-- Count per page -->
				<div class="section-count">
					<p>12</p>
					<ul>
						<li><a href="#">12</a></li>
						<li><a href="#">24</a></li>
						<li><a href="#">48</a></li>
					</ul>
				</div>

			</div>
			<!-- Catalog Topbar - end -->
			<div class="prod-items section-items">

				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/300x311" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Exterior</dt>
								<dd>Silt Pocket<br></dd>
								<dt>Material</dt>
								<dd>PU<br></dd>
								<dt>Occasion</dt>
								<dd>Versatile<br></dd>
								<dt>Shape</dt>
								<dd>Casual Tote<br></dd>
								<dt>Pattern Type</dt>
								<dd>Solid<br></dd>
								<dt>Style</dt>
								<dd>American Style<br></dd>
								<dt>Hardness</dt>
								<dd>Soft<br></dd>
								<dt>Decoration</dt>
								<dd>None<br></dd>
								<dt>Closure Type</dt>
								<dd>Zipper<br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="product.html">Adipisci aperiam commodi</a>
					</h3>
					<p class="prod-i-price">
						<b>$59</b>
					</p>
					<div class="prod-i-skuwrapcolor">
						<ul class="prod-i-skucolor">
							<li class="bx_active"><img src="img/color/red.jpg" alt="Red"></li>
							<li><img src="img/color/blue.jpg" alt="Blue"></li>
						</ul>
					</div>
				</div>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/300x366" alt="Nulla numquam obcaecati"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Material</dt>
								<dd>Cotton,Polyester<br></dd>
								<dt>Sleeve Length</dt>
								<dd>Short<br></dd>
								<dt>Tops Type</dt>
								<dd>Tees<br></dd>
								<dt>Pattern Type</dt>
								<dd>Solid<br></dd>
								<dt>Style</dt>
								<dd>Casual<br></dd>
								<dt>Hooded</dt>
								<dd>No<br></dd>
								<dt>Collar</dt>
								<dd>V-Neck<br></dd>
								<dt>Sleeve Style</dt>
								<dd>General<br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="product.html">Nulla numquam obcaecati</a>
					</h3>
					<p class="prod-i-price">
						<b>$48</b>
					</p>
				</div>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/370x300" alt="Dignissimos eaque earum"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Gender</dt>
								<dd>Unisex<br></dd>
								<dt>Material</dt>
								<dd>Wool, Polyester<br></dd>
								<dt>Style</dt>
								<dd>Casual<br></dd>
								<dt>Pattern Type</dt>
								<dd>Solid<br></dd>
								<dt>Hats size</dt>
								<dd>Oversize<br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="product.html">Dignissimos eaque earum</a>
					</h3>
					<p class="prod-i-price">
						<b>$37</b>
					</p>
				</div>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/300x345" alt="Porro quae quasi"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Sleeve Length</dt>
								<dd>Full<br></dd>
								<dt>Sleeve Style</dt>
								<dd>Long sleeve<br></dd>
								<dt>Collar</dt>
								<dd>V-Neck<br></dd>
								<dt>Fabric Type</dt>
								<dd>Broadcloth<br></dd>
								<dt>Material</dt>
								<dd>Cotton,Spandex<br></dd>
								<dt>Hooded</dt>
								<dd>No<br></dd>
								<dt>Pattern Type</dt>
								<dd>Solid<br></dd>
								<dt>Gender</dt>
								<dd>Men<br></dd>
								<dt>Style</dt>
								<dd>Fashion<br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="product.html">Porro quae quasi</a>
					</h3>
					<p class="prod-i-price">
						<b>$85</b>
						<del>$110</del>
					</p>
				</div>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/378x300" alt="Sunt temporibus velit"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Gender</dt>
								<dd>Men<br></dd>
								<dt>Shaft Material</dt>
								<dd>Flock<br></dd>
								<dt>Lining Material</dt>
								<dd>Plush<br></dd>
								<dt>Insole Material</dt>
								<dd>Rubber<br></dd>
								<dt>Season</dt>
								<dd>Winter<br></dd>
								<dt>With Platforms</dt>
								<dd>No<br></dd>
								<dt>Pattern Type</dt>
								<dd>Solid<br></dd>
								<dt>Boot Height</dt>
								<dd>Ankle<br></dd>
								<dt>Closure Type</dt>
								<dd>Lace-Up<br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="product.html">Sunt temporibus velit</a>
					</h3>
					<p class="prod-i-price">
						<b>$115</b>
					</p>
				</div>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/300x394" alt="Harum illum incidunt"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Outerwear Type</dt>
								<dd>Jackets<br></dd>
								<dt>Sleeve Style</dt>
								<dd>Regular<br></dd>
								<dt>Pattern Type</dt>
								<dd>Solid<br></dd>
								<dt>Material</dt>
								<dd>Polyester,Cotton<br></dd>
								<dt>Hooded</dt>
								<dd>Yes<br></dd>
								<dt>Style</dt>
								<dd>Casual<br></dd>
								<dt>Collar</dt>
								<dd>Turn-down Collar<br></dd>
								<dt>Decoration</dt>
								<dd>Pockets<br></dd>
								<dt>Gender</dt>
								<dd>Men<br></dd>
								<dt>Closure Type</dt>
								<dd>Zipper<br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="product.html">Harum illum incidunt</a>
					</h3>
					<p class="prod-i-price">
						<b>$130</b>
					</p>
				</div>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/300x303" alt="Reprehenderit rerum"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Outerwear Type</dt>
								<dd>Jackets<br></dd>
								<dt>Sleeve Style</dt>
								<dd>Regular<br></dd>
								<dt>Pattern Type</dt>
								<dd>Solid<br></dd>
								<dt>Material</dt>
								<dd>Polyester,Cotton<br></dd>
								<dt>Hooded</dt>
								<dd>Yes<br></dd>
								<dt>Style</dt>
								<dd>Casual<br></dd>
								<dt>Collar</dt>
								<dd>Turn-down Collar<br></dd>
								<dt>Decoration</dt>
								<dd>Pockets<br></dd>
								<dt>Gender</dt>
								<dd>Boys<br></dd>
								<dt>Closure Type</dt>
								<dd>Zipper<br></dd>
							</dl>
						</div>

						<div class="prod-sticker">
							<p class="prod-sticker-3">-20%</p>
						</div>
					</div>
					<h3>
						<a href="product.html">Reprehenderit rerum</a>
					</h3>
					<p class="prod-i-price">
						<b>$210</b>
						<del>$240</del>
					</p>
				</div>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/300x588" alt="Quae quasi adipisci alias"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Gender</dt>
								<dd>Women<br></dd>
								<dt>Pattern Type</dt>
								<dd>Solid<br></dd>
								<dt>Color Style</dt>
								<dd>Natural Color<br></dd>
								<dt>Material</dt>
								<dd>Polyester<br></dd>
								<dt>Length</dt>
								<dd>LongHooded<br></dd>
								<dt>Fabric Type</dt>
								<dd>Woven<br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="product.html">Quae quasi adipisci alias</a>
					</h3>
					<p class="prod-i-price">
						<b>$85</b>
					</p>
				</div>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/300x416" alt="Maxime molestias necessitatibus nobis"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Outerwear Type</dt>
								<dd>Jackets<br></dd>
								<dt>Sleeve Style</dt>
								<dd>Regular<br></dd>
								<dt>Pattern Type</dt>
								<dd>Solid<br></dd>
								<dt>Material</dt>
								<dd>Polyester,Cotton<br></dd>
								<dt>Hooded</dt>
								<dd>Yes<br></dd>
								<dt>Style</dt>
								<dd>Casual<br></dd>
								<dt>Collar</dt>
								<dd>Turn-down Collar<br></dd>
								<dt>Decoration</dt>
								<dd>Pockets<br></dd>
								<dt>Gender</dt>
								<dd>Men<br></dd>
								<dt>Closure Type</dt>
								<dd>Zipper<br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="product.html">Maxime molestias necessitatibus nobis</a>
					</h3>
					<p class="prod-i-price">
						<b>$95</b>
					</p>
				</div>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/300x480" alt="Facilis illum"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Outerwear Type</dt>
								<dd>Down & Parkas<br></dd>
								<dt>Closure Type</dt>
								<dd>Zipper<br></dd>
								<dt>Filling</dt>
								<dd>Cotton<br></dd>
								<dt>Fabric Type</dt>
								<dd>Woven<br></dd>
								<dt>Clothing Length</dt>
								<dd>Regular<br></dd>
								<dt>Material</dt>
								<dd>Polyester<br></dd>
								<dt>Pattern Type</dt>
								<dd>Solid<br></dd>
								<dt>Decoration</dt>
								<dd>Pockets, Zippers<br></dd>
								<dt>Sleeve Length</dt>
								<dd>Full<br></dd>
								<dt>Hooded</dt>
								<dd>Yes<br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="product.html">Facilis illum</a>
					</h3>
					<p class="prod-i-price">
						<b>$150</b>
						<del>$180</del>
					</p>
				</div>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/358x300" alt="Iusto labore laudantium"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Handbags Type</dt>
								<dd>Shoulder Bags<br></dd>
								<dt>Exterior</dt>
								<dd>Silt Pocket<br></dd>
								<dt>Material</dt>
								<dd>Canvas<br></dd>
								<dt>Occasion</dt>
								<dd>Versatile<br></dd>
								<dt>Shape</dt>
								<dd>Casual Tote<br></dd>
								<dt>Pattern Type</dt>
								<dd>Solid<br></dd>
								<dt>Style</dt>
								<dd>Casual<br></dd>
								<dt>Hardness</dt>
								<dd>Soft<br></dd>
								<dt>Decoration</dt>
								<dd>None<br></dd>
								<dt>Closure Type</dt>
								<dd>Zipper<br></dd>
							</dl>
						</div>

						<div class="prod-sticker">
							<p class="prod-sticker-1">NEW</p>
							<br><p class="prod-sticker-2">HIT</p>
						</div>
					</div>
					<h3>
						<a href="product.html">Iusto labore laudantium</a>
					</h3>
					<p class="prod-i-price">
						<b>$170</b>
					</p>
				</div>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/300x504" alt="Fuga impedit inciduntipsa"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Gender</dt>
								<dd>Women<br></dd>
								<dt>Silhouette</dt>
								<dd>Sheath<br></dd>
								<dt>Material</dt>
								<dd>Polyester<br></dd>
								<dt>Season</dt>
								<dd>Autumn<br></dd>
								<dt>Style</dt>
								<dd>Casual<br></dd>
								<dt>Waistline</dt>
								<dd>Natural<br></dd>
							</dl>
						</div>

						<div class="prod-sticker">
							<p class="prod-sticker-3">-30%</p><p class="prod-sticker-4 countdown" data-date="29 Jan 2017, 14:30:00"></p>
						</div>
					</div>
					<h3>
						<a href="product.html">Fuga impedit inciduntipsa</a>
					</h3>
					<p class="prod-i-price">
						<b>$80</b>
					</p>
				</div>

			</div>

			<!-- Pagination - start -->
			<ul class="pagi">
				<li class="active"><span>1</span></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li class="pagi-next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
			</ul>
			<!-- Pagination - end -->
		</div>
		<!-- Catalog Items | Gallery V1 - end -->

		<!-- Quick View Product - start -->
		<div class="qview-modal">
			<div class="prod-wrap">
				<a href="product.html">
					<h1 class="main-ttl">
						<span>Reprehenderit adipisci</span>
					</h1>
				</a>
				<div class="prod-slider-wrap">
					<div class="prod-slider">
						<ul class="prod-slider-car">
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
									<img src="http://placehold.it/500x525" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">
									<img src="http://placehold.it/500x591" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
									<img src="http://placehold.it/500x525" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
						</ul>
					</div>
					<div class="prod-thumbs">
						<ul class="prod-thumbs-car">
							<li>
								<a data-slide-index="0" href="#">
									<img src="http://placehold.it/500x525" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="1" href="#">
									<img src="http://placehold.it/500x591" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="2" href="#">
									<img src="http://placehold.it/500x525" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="3" href="#">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="4" href="#">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="5" href="#">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="6" href="#">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="prod-cont">
					<p class="prod-actions">
						<a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>
						<a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>
					</p>
					<div class="prod-skuwrap">
						<p class="prod-skuttl">Color</p>
						<ul class="prod-skucolor">
							<li class="active">
								<img src="img/color/blue.jpg" alt="">
							</li>
							<li>
								<img src="img/color/red.jpg" alt="">
							</li>
							<li>
								<img src="img/color/green.jpg" alt="">
							</li>
							<li>
								<img src="img/color/yellow.jpg" alt="">
							</li>
							<li>
								<img src="img/color/purple.jpg" alt="">
							</li>
						</ul>
						<p class="prod-skuttl">Sizes</p>
						<div class="offer-props-select">
							<p>XL</p>
							<ul>
								<li><a href="#">XS</a></li>
								<li><a href="#">S</a></li>
								<li><a href="#">M</a></li>
								<li class="active"><a href="#">XL</a></li>
								<li><a href="#">L</a></li>
								<li><a href="#">4XL</a></li>
								<li><a href="#">XXL</a></li>
							</ul>
						</div>
					</div>
					<div class="prod-info">
						<p class="prod-price">
							<b class="item_current_price">$238</b>
						</p>
						<p class="prod-qnt">
							<input type="text" value="1">
							<a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
							<a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
						</p>
						<p class="prod-addwrap">
							<a href="#" class="prod-add">Add to cart</a>
						</p>
					</div>
					<ul class="prod-i-props">
						<li>
							<b>SKU</b> 05464207
						</li>
						<li>
							<b>Manufacturer</b> Mayoral
						</li>
						<li>
							<b>Material</b> Cotton
						</li>
						<li>
							<b>Pattern Type</b> Print
						</li>
						<li>
							<b>Wash</b> Colored
						</li>
						<li>
							<b>Style</b> Cute
						</li>
						<li>
							<b>Color</b> Blue, Red
						</li>
						<li><a href="#" class="prod-showprops">All Features</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Quick View Product - end -->
	</section>
</main>
<!-- Main Content - end -->

@endsection