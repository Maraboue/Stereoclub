<!-- Content Section
============================================= -->

<section id="content">

<div class="Container">

    <div class="Body"> 

             <h2> Welcome to stereo club</h2>

                <p>

                     <strong>WE CREATE</strong> is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                     It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                     It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                     with desktop publishing software.
                </p>

    <div class="Product-container">

            <% loop $Results %>

                 <div class="Product">

                    <div class="img_wrapper">

                        <img src="$ImageSource.URL" alt="Loading.." />

                               <div class="img_description_layer">

                                    <% if $Ingredients %>

                                        <p class="img_description">$Ingredients</p>

                                    <% end_if %>

                                    <% if $Price %>

                                        <h3 class="img_title">$Price $</h3>

                                    <%end_if%>   
                                </div>

                            <h3 class="product_title">$Title</h3>

                            <p class="product_description"> $Description</p>
                    </div>

                </div>

            <%end_loop %>   
            
    </div>

    <!-- Pagination 
    ============================================= -->

    <div class="pagination">

        <%include Pagination%>
      
    </div>

    <!-- #Pagination end -->

     <!-- Sort by Price
    ============================================= -->

    <div class="text-right">

        <%include PriceSort%>

    </div>

    <!-- #Sort by price end -->

    <div class= footer_bg> 

        <h2 class="footer_bg_header">Get In touch</h2>

            <p class="footer_bg_text">47 Chandos Place, London, WC2N 4HS</p>

                <form action="https://www.google.com/maps/place/The+Welsh+Harp,+47+Chandos+Pl,+London+WC2N+4HS
                    ,+Storbritannien/@51.5096802,-0.125804,19.33z/data=!4m5!3m4!1s0x487604cc2a0bfe1f:0x48f1c831646551f9!8m2!3d51.5097188!4d-0.1259449">

                        <input class="footer_btn" type="submit" value="Locate us on map" />
                        
                </form>


        <img class="footer_img" src="{$ThemeDir}/images/footer-bg.jpg" alt="Stereo Nightclub"/>

    </div>


    </div>

</div>

</section><!-- #content end -->
    

</div>