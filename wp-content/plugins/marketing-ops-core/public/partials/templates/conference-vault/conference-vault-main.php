<?php
/**
 * Conference vault listing template.
 *
 * This template can be overridden by copying it to activetheme/marketing-ops-core/conference-vault/conference-vault-main.php
 *
 * @see         https://marketingops.com/
 * @author      Adarsh Verma
 * @package     Marketing_Ops_Core
 * @category    Template
 * @since       1.0.0
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

// Get the pillars.
$pillars = get_terms(
   array(
      'taxonomy'   => 'post_tag',
   'hide_empty' => false,
) );
?>
<section class="marketingopstemplatesconfernace conferencevault elementor-section elementor-section-boxed">
	<div class="margktingimgss"></div>
   <div class="elementor-container elementor-column-gap-default">
      <div class="conferencevaultinner">
         <h1>Conference Vault</h1>
         <h3>MarketingOps event speakers' presentations archive from 2018 to present day. Enjoy.</h3>
      </div>
   </div>
   <div class="elementor-container elementor-column-gap-default">
      <div class="conferencevaultinner_inner">
         <div class="conferencevaultinner_innerleft">
            <div class="elementor-shortcode">
               <div class="common_filter_row">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="directory_search_form">
                        <div class="expandableCollapsibleDiv platform_section">
                           <h3 class="open">Pillar</h3>
                           <ul class="moc_training_filters" style="">
                              <li>
                                 <input id="technologymanagement" type="checkbox" name="pillar[]" value="" data-taxonomy="">
                                 <label for="technologymanagement">Technology Management </label>
                              </li>
                              <li>
                                 <input id="strategyoperations" type="checkbox" name="pillar[]" value="" data-taxonomy="">
                                 <label for="strategyoperations">Strategy Operations</label>
                              </li>
                              <li>
                                 <input id="enablementpmo" type="checkbox" name="pillar[]" value="" data-taxonomy="">
                                 <label for="enablementpmo">Enablement & PMO</label>
                              </li>
                              <li>
                                 <input id="marketinginsights" type="checkbox" name="pillar[]" value="" data-taxonomy="">
                                 <label for="marketinginsights">Marketing BI & Insights</label>
                              </li>
                              <li>
                                 <input id="other" type="checkbox" name="pillar[]" value="" data-taxonomy="">
                                 <label for="other">Other</label>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="common_filter_row">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="directory_search_form">
                        <div class="expandableCollapsibleDiv platform_section">
                           <h3 class="open">Conference</h3>
                           <ul class="moc_training_filters" style="">
                              <li>
                                 <input id="Mops23" type="checkbox" name="conference[]" value="" data-taxonomy="">
                                 <label for="Mops23">Mops-A-palooza 23</label>
                              </li>
                              <li>
                                 <input id="Caree22" type="checkbox" name="conference[]" value="" data-taxonomy="">
                                 <label for="Caree22">Career Fair 22</label>
                              </li>
                              <li>
                                 <input id="Summer22" type="checkbox" name="conference[]" value="" data-taxonomy="">
                                 <label for="Summer22">Summer Camp 22</label>
                              </li>
                              <li>
                                 <input id="Summer21" type="checkbox" name="conference[]" value="" data-taxonomy="">
                                 <label for="Summer21">Summer Camp 21</label>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="common_filter_row">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="directory_search_form">
                        <div class="expandableCollapsibleDiv platform_section">
                           <h3 class="open">Skill level</h3>
                           <ul class="moc_training_filters" style="">
                              <li>
                                 <input id="Intermediate" type="checkbox" name="skilllevel[]" value="" data-taxonomy="">
                                 <label for="Intermediate">Intermediate</label>
                              </li>
                              <li>
                                 <input id="Advanced" type="checkbox" name="skilllevel[]" value="" data-taxonomy="">
                                 <label for="Advanced">Advanced</label>
                              </li>
                              <li>
                                 <input id="Beginner" type="checkbox" name="skilllevel[]" value="" data-taxonomy="">
                                 <label for="Beginner">Beginner</label>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="common_filter_row">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="directory_search_form mainsidbarsearch">
                        <div class="platform_section">
                           <h3 class="open">Search</h3>
                            <div class="moc_input_field">
								<input type="text" id="search_keywords" name="search_keywords" placeholder="" value="">
						    </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="conferencevaultinner_innerright">
            <div class="conferencevaultinner_innerright_inner">
               <h2>Mops-A-palooza 2023</h2>
               <p>83 Sessions</p>
               <ul>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>Unveiling the New Pillars</h4>
                           <small>by Darrell Alfonso</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis bibendum. Nibh nisl condimentum id venenatis a condimentum. In arcu cursus euismod quis viverra. 
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868-1.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>The Future is Now: Embracing the AI-Powered CRM Revolution</h4>
                           <small>by Connor Jeffers</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis bibendum. Nibh nisl condimentum id venenatis a condimentum. In arcu cursu
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868-2.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>How MarketingOps Leads Building An Annual Marketing Plan on Behalf of the CMO</h4>
                           <small>by Rani Salehi</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis b
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868-3.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>How to Avoid Wasting Time!</h4>
                           <small>by Jon Westover</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis bibendum. Nibh nisl condimentum id venenatis a condimentum. In arcu cursus euismod quis viverra.  
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868-4.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>Change Management</h4>
                           <small>by Chloe Washington</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis bibendum. Nibh nisl condimentum id venenatis a condimentum. In arcu cursus euismod quis viverra.  
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="conferencevaultinnergridboximageshowmore">
                           <a href="javascript:void(0);">
                              Show this event
                              <i>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                                    <g clip-path="url(#clip0_26_82)">
                                       <path d="M10.5262 3.99457C10.2892 3.98546 10.0693 4.12103 9.97249 4.3375C9.87452 4.55396 9.91667 4.80688 10.0807 4.98005L11.8728 6.91682H0.592831C0.382065 6.9134 0.187248 7.02391 0.0812957 7.20619C-0.0257965 7.38734 -0.0257965 7.61292 0.0812957 7.79406C0.187248 7.97634 0.382065 8.08685 0.592831 8.08344H11.8728L10.0807 10.0202C9.9349 10.1729 9.88363 10.3916 9.94515 10.5933C10.0067 10.7949 10.1719 10.9476 10.3769 10.9931C10.5831 11.0387 10.7973 10.9692 10.9375 10.8131L14.001 7.50013L10.9375 4.18711C10.8326 4.0709 10.6834 4.00027 10.5262 3.99457Z" fill="#242730"/>
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_26_82">
                                          <rect width="15" height="11" fill="white"/>
                                       </clipPath>
                                    </defs>
                                 </svg>
                              </i>
                           </a>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="conferencevaultinner_innerright_inner">
               <h2>MarketingOps Career Fair 2022 </h2>
               <p>46 Sessions</p>
               <ul>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>Unveiling the New Pillars</h4>
                           <small>by Darrell Alfonso</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis bibendum. Nibh nisl condimentum id venenatis a condimentum. In arcu cursus euismod quis viverra. 
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868-1.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>The Future is Now: Embracing the AI-Powered CRM Revolution</h4>
                           <small>by Connor Jeffers</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis bibendum. Nibh nisl condimentum id venenatis a condimentum. In arcu cursu
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868-2.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>How MarketingOps Leads Building An Annual Marketing Plan on Behalf of the CMO</h4>
                           <small>by Rani Salehi</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis b
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868-3.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>How to Avoid Wasting Time!</h4>
                           <small>by Jon Westover</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis bibendum. Nibh nisl condimentum id venenatis a condimentum. In arcu cursus euismod quis viverra.  
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868-4.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>Change Management</h4>
                           <small>by Chloe Washington</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis bibendum. Nibh nisl condimentum id venenatis a condimentum. In arcu cursus euismod quis viverra.  
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="conferencevaultinnergridboximageshowmore">
                           <a href="javascript:void(0);">
                              Show this event
                              <i>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                                    <g clip-path="url(#clip0_26_82)">
                                       <path d="M10.5262 3.99457C10.2892 3.98546 10.0693 4.12103 9.97249 4.3375C9.87452 4.55396 9.91667 4.80688 10.0807 4.98005L11.8728 6.91682H0.592831C0.382065 6.9134 0.187248 7.02391 0.0812957 7.20619C-0.0257965 7.38734 -0.0257965 7.61292 0.0812957 7.79406C0.187248 7.97634 0.382065 8.08685 0.592831 8.08344H11.8728L10.0807 10.0202C9.9349 10.1729 9.88363 10.3916 9.94515 10.5933C10.0067 10.7949 10.1719 10.9476 10.3769 10.9931C10.5831 11.0387 10.7973 10.9692 10.9375 10.8131L14.001 7.50013L10.9375 4.18711C10.8326 4.0709 10.6834 4.00027 10.5262 3.99457Z" fill="#242730"/>
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_26_82">
                                          <rect width="15" height="11" fill="white"/>
                                       </clipPath>
                                    </defs>
                                 </svg>
                              </i>
                           </a>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="conferencevaultinner_innerright_inner">
               <h2>MoPros Summer Camp 2022</h2>
               <p>23 Sessions</p>
               <ul>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>Unveiling the New Pillars</h4>
                           <small>by Darrell Alfonso</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis bibendum. Nibh nisl condimentum id venenatis a condimentum. In arcu cursus euismod quis viverra. 
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868-1.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>The Future is Now: Embracing the AI-Powered CRM Revolution</h4>
                           <small>by Connor Jeffers</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis bibendum. Nibh nisl condimentum id venenatis a condimentum. In arcu cursu
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868-2.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>How MarketingOps Leads Building An Annual Marketing Plan on Behalf of the CMO</h4>
                           <small>by Rani Salehi</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis b
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868-3.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>How to Avoid Wasting Time!</h4>
                           <small>by Jon Westover</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis bibendum. Nibh nisl condimentum id venenatis a condimentum. In arcu cursus euismod quis viverra.  
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="innerimagebox">
                           <img src="https://marketingops.com/wp-content/uploads/2024/05/Rectangle-868-4.jpg" />
                        </div>
                        <div class="innerimageboxdescriptions">
                           <h4>Change Management</h4>
                           <small>by Chloe Washington</small>
                           <p>
                              Sem integer vitae justo eget magna fermentum. Arcu dui vivamus arcu felis bibendum. Nibh nisl condimentum id venenatis a condimentum. In arcu cursus euismod quis viverra.  
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="conferencevaultinnergridboximage">
                        <div class="conferencevaultinnergridboximageshowmore">
                           <a href="javascript:void(0);">
                              Show this event
                              <i>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                                    <g clip-path="url(#clip0_26_82)">
                                       <path d="M10.5262 3.99457C10.2892 3.98546 10.0693 4.12103 9.97249 4.3375C9.87452 4.55396 9.91667 4.80688 10.0807 4.98005L11.8728 6.91682H0.592831C0.382065 6.9134 0.187248 7.02391 0.0812957 7.20619C-0.0257965 7.38734 -0.0257965 7.61292 0.0812957 7.79406C0.187248 7.97634 0.382065 8.08685 0.592831 8.08344H11.8728L10.0807 10.0202C9.9349 10.1729 9.88363 10.3916 9.94515 10.5933C10.0067 10.7949 10.1719 10.9476 10.3769 10.9931C10.5831 11.0387 10.7973 10.9692 10.9375 10.8131L14.001 7.50013L10.9375 4.18711C10.8326 4.0709 10.6834 4.00027 10.5262 3.99457Z" fill="#242730"/>
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_26_82">
                                          <rect width="15" height="11" fill="white"/>
                                       </clipPath>
                                    </defs>
                                 </svg>
                              </i>
                           </a>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="confernceloadmore">
               <div class="confernceloadmoreinner">
                  <a href="javascript:void(0);">
                  Load more
                  </a>	
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer();
