<footer class="footer">
    <div class="footer-content">
        <div class="footer-top">
            <!-- Colonna DC COMICS -->
            <div class="footer-column dc-comics-shop">
                <div class="footer-section">
                    <h3>{{ $footerSections[0]['title'] }}</h3>
                    <ul>
                        @foreach ($footerSections[0]['items'] as $item)
                            <li><a href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Sezione SHOP -->
                <div class="footer-section">
                    <h3>{{ $footerSections[1]['title'] }}</h3>
                    <ul>
                        @foreach ($footerSections[1]['items'] as $item)
                            <li><a href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Altre colonne -->
            @php
                // Usa array_slice per ottenere le sezioni rimanenti
                $otherSections = array_slice($footerSections, 2);
            @endphp

            @foreach ($otherSections as $section)
                <div class="footer-column">
                    <h3>{{ $section['title'] }}</h3>
                    <ul>
                        @foreach ($section['items'] as $item)
                            <li><a href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        <!-- Footer bottom -->
        <div class="footer-bottom">
            <div class="footer-middle">
                <button class="signup-button">SIGN-UP NOW!</button>
            </div>
            <div class="social-icons">
                <div class="followus">
                    <p>FOLLOW US</p>
                </div>
                @foreach ($socialIcons as $icon)
                    <a href="{{ $icon['url'] }}"><img src="{{ asset('./img/' . $icon['image']) }}"
                            alt="{{ $icon['alt'] }}"></a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
