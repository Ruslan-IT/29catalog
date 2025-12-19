<style>
    .logo{
        position:relative;
        top: -9px;

    }
</style>

<svg
    width="200"
    height="50"
    viewBox="0 0 240 60"
    xmlns="http://www.w3.org/2000/svg"
    role="img"
    aria-label="PromWater logo"
>
    <defs>
        <linearGradient id="gearGrad" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#7ECFFF"/>
            <stop offset="100%" stop-color="#2A8FE7"/>
        </linearGradient>

        <linearGradient id="dropGrad" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#9ADFFF"/>
            <stop offset="100%" stop-color="#1E6FD9"/>
        </linearGradient>
    </defs>

    <!-- Gear -->
    <g transform="translate(8,8)">
        <path
            d="M26 0
               L31 4 L38 2 L42 9 L49 13 L47 20
               L51 26 L47 32 L49 39 L42 43
               L38 50 L31 48 L26 52 L21 48
               L14 50 L10 43 L3 39 L5 32
               L1 26 L5 20 L3 13 L10 9
               L14 2 L21 4 Z"
            fill="url(#gearGrad)"
        />
        <circle cx="26" cy="26" r="12" fill="white"/>
    </g>

    <!-- Drop -->
    <g transform="translate(30,6)">
        <path
            d="M14 0
               C14 0 2 16 2 25
               C2 34 7 39 14 39
               C21 39 26 34 26 25
               C26 16 14 0 14 0Z"
            fill="url(#dropGrad)"
        >
            <animateTransform
                attributeName="transform"
                type="translate"
                from="0 0"
                to="0 5"
                dur="1.8s"
                repeatCount="indefinite"
                direction="alternate"
                easing="ease-in-out"
            />
        </path>
    </g>

    <!-- Text -->
    <text
        x="65"
        y="43"
        font-size="30"
        font-weight="600"
        font-family="Arial, Helvetica, sans-serif"
        fill="#1E88E5"
    >
        Prom<tspan fill="#1565C0">Water</tspan>
    </text>
</svg>

