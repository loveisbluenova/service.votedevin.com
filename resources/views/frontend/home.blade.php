@include('layouts.style')
<title>Index | Index</title>

<div>

    <!--BEGIN BACK TO TOP-->
    <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
    <!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
     @include('layouts.header')
    <!--END TOPBAR-->
    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
        @include('layouts.menu')
        <!--END SIDEBAR MENU-->

        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
            @include('layouts.sidebar')
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">
                        Home</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Dashboard</li>
                </ol>
                <div class="clearfix">
                </div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE-->
            <div id="tab-general">
                <div class="mbl">
                    <div class="col-lg-12">

                        <div class="col-md-12">
                            <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                            </div>
                        </div>

                    </div>

                    <div>

                        <div class="page-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel income">
                                        <div class="panel-body">
                                            <h4>{{$posts->title}}</h4>

                                            {!! $posts->body !!}
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-body">
                                            <div id="grid-layout-table-1" class="box jplist">
                                                <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                                <div class="jplist-panel box panel-top">
                                                    <button type="button" data-control-type="reset" data-control-name="reset" data-control-action="reset" class="jplist-reset-btn btn btn-default">Reset<i class="fa fa-share mls"></i></button>
                                                    <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" class="jplist-drop-down form-control">
                                                        <ul class="dropdown-menu">
                                                            <li><span data-number="3"> 3 per page</span></li>
                                                            <li><span data-number="5"> 5 per page</span></li>
                                                            <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                            <li><span data-number="all"> view all</span></li>
                                                        </ul>
                                                    </div>
                                                    <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                        <ul class="dropdown-menu">
                                                            <li><span data-path="default">Sort by</span></li>
                                                            <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                            <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                            <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                            <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                            <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>
                                                            <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                            <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                            <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                        </ul>
                                                    </div>
                                                    <div data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                    <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>
                                                </div>
                                                <div class="box text-shadow">
                                                    <table class="demo-tbl">
                                                        <!--<item>1</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">03/15/2012</p>

                                                                <p class="title">Arch</p>

                                                                <p class="desc">An arch is a structure that spans a space and supports a load. Arches appeared as early as the 2nd millennium BC in Mesopotamian brick architecture and their systematic use started with the Ancient Romans who were the first to apply the technique to a wide range of structures.</p>

                                                                <p class="like">5 Likes</p>

                                                            </td>
                                                        </tr>
                                                        <!--<item>2</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">03/18/2012</p>

                                                                <p class="title">Architecture</p>

                                                                <p class="desc">Architecture is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements.</p>

                                                                <p class="like">25 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>3</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">01/16/2011</p>

                                                                <p class="title">Autumn</p>

                                                                <p class="desc">Autumn or Fall is one of the four temperate seasons. Autumn marks the transition from summer into winter, in September (Northern Hemisphere) or March (Southern Hemisphere) when the arrival of night becomes noticeably earlier. The equinoxes might be expected to be in the middle of their respective seasons, but temperature lag (caused by the thermal latency of the ground and sea) means that seasons appear later than dates calculated from a purely astronomical perspective.</p>

                                                                <p class="like">12 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>4</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">02/24/2000</p>

                                                                <p class="title">Boats</p>

                                                                <p class="desc">A boat is a watercraft of any size designed to float or plane, to provide passage across water. Usually this water will be inland (lakes) or in protected coastal areas. However, boats such as the whaleboat were designed to be operated from a ship in an offshore environment. In naval terms, a boat is a vessel small enough to be carried aboard another vessel (a ship).</p>

                                                                <p class="like">11 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>5</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">11/22/2001</p>

                                                                <p class="title">Books</p>

                                                                <p class="desc">A book is a set of written, printed, illustrated, or blank sheets, made of ink, paper, parchment, or other materials, usually fastened together to hinge at one side. A single sheet within a book is called a leaf, and each side of a leaf is called a page. A book produced in electronic format is known as an electronic book (e-book).
                                                                </p>

                                                                <p class="like">100 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>6</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">02/05/2004</p>

                                                                <p class="title">Business</p>

                                                                <p class="desc">A business (also known as enterprise or firm) is an organization engaged in the trade of goods, services, or both to consumers. Businesses are predominant in capitalist economies, where most of them are privately owned and administered to earn profit to increase the wealth of their owners. Businesses may also be not-for-profit or state-owned. A business owned by multiple individuals may be referred to as a company, although that term also has a more precise meaning.</p>

                                                                <p class="like">15 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>7</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">05/08/2003</p>

                                                                <p class="title">Calendar</p>

                                                                <p class="desc">A calendar is a system of organizing days for social, religious, commercial, or administrative purposes. This is done by giving names to periods of time, typically days, weeks, months, and years. The name given to each day is known as a date. Periods in a calendar (such as years and months) are usually, though not necessarily, synchronized with the cycle of the sun or the moon.</p>

                                                                <p class="like">18 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>8</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">09/01/2007</p>

                                                                <p class="title">Car</p>

                                                                <p class="desc">An automobile, autocar, motor car or car is a wheeled motor vehicle used for transporting passengers, which also carries its own engine or motor. Most definitions of the term specify that automobiles are designed to run primarily on roads, to have seating for one to eight people, to typically have four wheels, and to be constructed principally for the transport of people rather than goods.</p>

                                                                <p class="like">7 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>9</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">11/12/1998</p>

                                                                <p class="title">Christmas</p>

                                                                <p class="desc">Christmas or Christmas Day is an annual commemoration of the birth of Jesus Christ, celebrated generally on December as a religious and cultural holiday by billions of people around the world. A feast central to the Christian liturgical year, it closes the Advent season and initiates the twelve days of Christmastide. Christmas is a civil holiday in many of the world's nations, is celebrated by an increasing number of non-Christians, and is an integral part of the Christmas and holiday season.</p>

                                                                <p class="like">29 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>10</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">06/10/1995</p>

                                                                <p class="title">The Christmas Toy</p>

                                                                <p class="desc">The Christmas Toy is a 1986 made-for-TV movie by The Jim Henson Company. It originally aired on ABC on December 6, 1986, and was originally sponsored by Kraft Foods. Originally introduced by Kermit The Frog, it was released on VHS format in 1993. In 2008, HIT Entertainment (distributed by Lionsgate) released the special on DVD, but edited out Kermit's appearance due to legal issues.</p>

                                                                <p class="like">35 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>11</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">04/04/2006</p>

                                                                <p class="title">Christmas Tree</p>

                                                                <p class="desc">A Christmas tree is a decorated tree, usually an evergreen conifer such as pine or fir, traditionally associated with the celebration of Christmas. An artificial Christmas tree is an object made to resemble such a tree, usually made from polyvinyl chloride.</p>

                                                                <p class="like">86 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>12</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">06/19/1981</p>

                                                                <p class="title">City</p>

                                                                <p class="desc">A city is a relatively large and permanent settlement. Although there is no agreement on how a city is distinguished from a town within general English language meanings, many cities have a particular administrative, legal, or historical status based on local law.</p>

                                                                <p class="like">125 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>13</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">08/25/1991</p>

                                                                <p class="title">Capital City</p>

                                                                <p class="desc">A capital city (or just, capital) is the area of a country, province, region, or state considered to enjoy primary status; although there are exceptions, a capital is typically a city that physically encompasses the offices and meeting places of the seat of government and is usually fixed by law or by the constitution. An alternative term is political capital, but this phrase has a second meaning based on an alternate sense of the word capital. The capital is often, but not necessarily, the largest city of its constituent area.</p>

                                                                <p class="like">191 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>14</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">02/02/2002</p>

                                                                <p class="title">Coffee</p>

                                                                <p class="desc">Coffee is a brewed beverage with a bitter, acidic flavor prepared from the roasted seeds of the coffee plant. The beans are found in coffee cherries, which grow on trees cultivated in over 70 countries, primarily in equatorial Latin America, Southeast Asia, South Asia and Africa. Green (unroasted) coffee is one of the most traded agricultural commodities in the world. Coffee can have a stimulating effect on humans due to its caffeine content. It is one of the most-consumed beverages in the world.</p>

                                                                <p class="like">18 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>15</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">03/17/1999</p>

                                                                <p class="title">Coins</p>

                                                                <p class="desc">A coin is a piece of hard material that is standardized in weight, is produced in large quantities in order to facilitate trade, and primarily can be used as a legal tender. Coins are usually metal or a metallic material and sometimes made of synthetic materials, usually in the shape of a disc, and most often issued by a government. Coins are used as a form of money in transactions of various kinds, from the everyday circulation coins to the storage of large numbers of bullion coins. In the present day, coins and banknotes make up currency, the cash forms of all modern money systems.</p>

                                                                <p class="like">39 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>16</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">03/08/1990</p>

                                                                <p class="title">Crayons</p>

                                                                <p class="desc">A crayon is a stick of colored wax, charcoal, chalk, or other materials used for writing, coloring, drawing, and other methods of illustration. A crayon made of oiled chalk is called an oil pastel; when made of pigment with a dry binder, it is simply a pastel; both are popular media for color artwork. A grease pencil or china marker (UK chinagraph pencil) is made of colored hardened grease and is useful for marking on hard, glossy surfaces such as porcelain or glass. Some fine arts companies such as Swiss Caran d'Ache manufacture water-soluble crayons, whose colors are easily mixed once applied to media.</p>

                                                                <p class="like">14 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>17</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">05/25/1965</p>

                                                                <p class="title">Cupcakes</p>

                                                                <p class="desc">A cupcake (also British English: fairy cake; Australian English: patty cake or cup cake) is a small cake designed to serve one person, frequently baked in a small, thin paper or aluminum cup. As with larger cakes, frosting and other cake decorations, such as sprinkles, are common on cupcakes. Although their origin is unknown, recipes for cupcakes have been printed since at least the late 12th century.</p>

                                                                <p class="like">128 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>18</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">12/31/1986</p>

                                                                <p class="title">Nests</p>

                                                                <p class="desc">A nest is a place of refuge to hold an animal's eggs or provide a place to live or raise offspring. They are usually made of some organic material such as twigs, grass, and leaves; or may simply be a depression in the ground, or a hole in a tree, rock or building. Human-made materials, such as string, plastic, cloth, hair or paper, may be used.</p>

                                                                <p class="like">66 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>19</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">03/19/2012</p>

                                                                <p class="title">Flower</p>

                                                                <p class="desc">A flower, sometimes known as a bloom or blossom, is the reproductive structure found in flowering plants (plants of the division Magnoliophyta, also called angiosperms). The biological function of a flower is to effect reproduction, usually by providing a mechanism for the union of sperm with eggs. Flowers may facilitate outcrossing (fusion of sperm and eggs from different individuals in a population) or allow selfing (fusion of sperm and egg from the same flower).</p>

                                                                <p class="like">85 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>20</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">01/11/2011</p>

                                                                <p class="title">Pseudanthium</p>

                                                                <p class="desc">A pseudanthium (Greek for "false flower") or flower head is a special type of inflorescence, in which several flowers are grouped together to form a flower-like structure. The real flowers are generally small and greatly reduced, but can sometimes be quite large (as in the sunflower flower head). Pseudanthia take various forms. The individual flowers of a pseudanthium can be called florets.</p>

                                                                <p class="like">22 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>21</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">06/06/1993</p>

                                                                <p class="title">Flowering Plant</p>

                                                                <p class="desc">The flowering plants (angiosperms), also known as Angiospermae or Magnoliophyta, are the most diverse group of land plants. Angiosperms are seed-producing plants like the gymnosperms and can be distinguished from the gymnosperms by a series of synapomorphies (derived characteristics). These characteristics include flowers, endosperm within the seeds, and the production of fruits that contain the seeds.</p>

                                                                <p class="like">90 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>22</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">06/10/1995</p>

                                                                <p class="title">Fountains</p>

                                                                <p class="desc">A fountain (from the Latin "fons" or "fontis", a source or spring) is a piece of architecture which pours water into a basin or jets it into the air either to supply drinking water or for decorative or dramatic effect. Fountains were originally purely functional, connected to springs or aqueducts and used to provide drinking water and water for bathing and washing to the residents of cities, towns and villages. Until the late 19th century most fountains operated by gravity, and needed a source of water higher than the fountain, such as a reservoir or aqueduct, to make the water flow or jet into the air.</p>

                                                                <p class="like">40 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>23</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">04/12/1990</p>

                                                                <p class="title">Leaves</p>

                                                                <p class="desc">A leaf is an organ of a vascular plant, as defined in botanical terms, and in particular in plant morphology. Foliage is a mass noun that refers to leaves as a feature of plants. Typically a leaf is a thin, flattened organ borne above ground and specialized or photosynthesis, but many types of leaves are adapted in ways almost unrecognisable in those terms: some are not flat (for example many succulent leaves and conifers), some are not above ground (such as bulb scales), and some are without major photosynthetic function (consider for example cataphylls, spines, and cotyledons).</p>

                                                                <p class="like">42 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>24</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">11/04/2001</p>

                                                                <p class="title">Landscapes</p>

                                                                <p class="desc">Landscape comprises the visible features of an area of land, including the physical elements of landforms such as (ice-capped) mountains, hills, water bodies such as rivers, lakes, ponds and the sea, living elements of land cover including indigenous vegetation, human elements including different forms of land use, buildings and structures, and transitory elements such as lighting and weather conditions.</p>

                                                                <p class="like">14 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>25</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">08/19/2006</p>

                                                                <p class="title">Conifer Cone</p>

                                                                <p class="desc">A cone (in formal botanical usage: strobilus, plural strobili) is an organ on plants in the division Pinophyta (conifers) that contains the reproductive structures. The familiar woody cone is the female cone, which produces seeds. The male cones, which produce pollen, are usually herbaceous and much less conspicuous even at full maturity. The name "cone" derives from the fact that the shape in some species resembles a geometric cone. The individual plates of a cone are known as scales.</p>

                                                                <p class="like">321 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>26</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">07/24/1995</p>

                                                                <p class="title">Rivers</p>

                                                                <p class="desc">A river is a natural watercourse, usually freshwater, flowing towards an ocean, a lake, a sea, or another river. In a few cases, a river simply flows into the ground or dries up completely before reaching another body of water. Small rivers may also be called by several other names, including stream, creek, brook, rivulet, tributary and rill. There are no official definitions for generic terms, such as river, as applied to geographic features, although in some countries or communities a stream may be defined by its size. Many names for small rivers are specific to geographic location; one example is "burn" in Scotland and northeast England. Sometimes a river is said to be larger than a creek, but this is not always the case, because of vagueness in the language.</p>

                                                                <p class="like">88 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>27</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">03/03/1953</p>

                                                                <p class="title">River Source</p>

                                                                <p class="desc">The source or headwaters of a river or stream is the furthest place in that river or stream from its estuary or confluence with another river, as measured along the course of the river.</p>

                                                                <p class="like">62 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>28</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">07/17/2009</p>

                                                                <p class="title">Sunset</p>

                                                                <p class="desc">Sunset or sundown is the daily disappearance of the Sun below the horizon in the west as a result of Earth's rotation. The time of sunset is defined in astronomy as the moment when the trailing edge of the Sun's disk disappears below the horizon in the west. The ray path of light from the setting Sun is highly distorted near the horizon because of atmospheric refraction, making the sunset appear to occur when the Sun's disk is already about one diameter below the horizon. Sunset is distinct from dusk, which is the moment at which darkness falls, which occurs when the Sun is approximately eighteen degrees below the horizon. The period between sunset and dusk is called twilight.
                                                                </p>

                                                                <p class="like">25 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>29</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">02/20/2008</p>

                                                                <p class="title">Tree</p>

                                                                <p class="desc">A tree is a perennial woody plant. It is most often defined as a woody plant that has many secondary branches supported clear of the ground on a single main stem or trunk with clear apical dominance. A minimum height specification at maturity is cited by some authors, varying from 3 m to 6 m; some authors set a minimum of 10 cm trunk diameter (30 cm girth). Woody plants that do not meet these definitions by having multiple stems and/or small size are usually called shrubs, although many trees such as Mallee do not meet such definitions. Compared with most other plants, trees are long-lived, some reaching several thousand years old and growing to up to 115 m (379 ft) high.
                                                                </p>

                                                                <p class="like">57 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>30</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">07/26/2012</p>

                                                                <p class="title">Winter</p>

                                                                <p class="desc">Winter is the coldest season of the year in temperate climates, between autumn and spring. At the winter solstice, the days are shortest and the nights are longest, with days lengthening as the season progresses after the solstice.</p>

                                                                <p class="like">79 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>31</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">07/18/1995</p>

                                                                <p class="title">Seesaw</p>

                                                                <p class="desc">A see saw (also known as a teeter-totter or teeter board) is a long, narrow board pivoted in the middle so that, as one end goes up, the other goes down. Mechanically a seesaw is a lever and fulcrum. Seesaws also work as a simple example of a mechanical system with two equilibrium positions. One side is stable, while the other is unstable.
                                                                </p>

                                                                <p class="like">32 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>32</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">02/15/2005</p>

                                                                <p class="title">Winter Sun</p>

                                                                <p class="desc">The Sun is the star at the center of the Solar System. It is almost perfectly spherical and consists of hot plasma interwoven with magnetic fields. It has a diameter of about 1,392,000 km, about 109 times that of Earth, and its mass accounts for about 99.86% of the total mass of the Solar System. Chemically, about three quarters of the Sun's mass consists of hydrogen, while the rest is mostly helium. The remainder (1.69%, which nonetheless equals 5,628 times the mass of Earth) consists of heavier elements, including oxygen, carbon, neon and iron, among others.</p>

                                                                <p class="like">81 Likes</p>
                                                            </td>
                                                        </tr>
                                                        <!--<item>33</item>-->
                                                        <tr class="tbl-item">
                                                            <!--<data></data>-->
                                                            <td class="td-block">
                                                                <p class="date">11/12/2004</p>

                                                                <p class="title">Wood</p>

                                                                <p class="desc">Wood is a hard, fibrous tissue found in many trees. It has been used for hundreds of thousands of years for both fuel and as a construction material. It is an organic material, a natural composite of cellulose fibers (which are strong in tension) embedded in a matrix of lignin which resists compression. Wood is produced as secondary xylem in the stems of trees (and other woody plants). In a living tree it performs a support function, enabling woody plants to grow large or to stand up for themselves. It also mediates the transfer of water and nutrients to the leaves and other growing tissues. Wood may also refer to other plant materials with comparable properties, and to material engineered from wood, or wood chips or fiber.</p>

                                                                <p class="like">25 Likes</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="box jplist-no-results text-shadow align-center">
                                                    <p>No results found</p>
                                                </div>
                                                <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                                <div class="jplist-panel box panel-bottom">
                                                    <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-drop-down form-control">
                                                        <ul class="dropdown-menu">
                                                            <li><span data-number="3"> 3 per page</span></li>
                                                            <li><span data-number="5"> 5 per page</span></li>
                                                            <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                            <li><span data-number="all"> view all</span></li>
                                                        </ul>
                                                    </div>
                                                    <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-control-animate-to-top="true" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                        <ul class="dropdown-menu">
                                                            <li><span data-path="default">Sort by</span></li>
                                                            <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                            <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                            <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                            <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                            <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>
                                                            <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                            <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                            <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                        </ul>
                                                    </div>
                                                    <div data-type="{start} - {end} of {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                    <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!--BEGIN FOOTER-->
            <div id="footer">
                <div class="copyright">
                    <a href="#">&copy; ThemesGround 2015. Designed by ThemesGround </a></div>
            </div>
            <!--END FOOTER-->
        </div>
        <!--END CONTENT-->
</div>
<!--END PAGE WRAPPER-->
</div>
</div>
@include('layouts.script')