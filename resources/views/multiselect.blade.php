<html>
<head>
    <style>

        :root {
            --select-border: #393939;
            --select-focus: #101484;
            --select-arrow: var(--select-border);
        }

        select {
        // styles reset, including removing the default dropdown arrow
        appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: transparent;
            border: none;
            padding: 0 1em 0 0;
            margin: 0;
            width: 100%;
            font-family: inherit;
            font-size: inherit;
            cursor: inherit;
            line-height: inherit;

        // Stack above custom arrow
        z-index: 1;

        // Remove focus outline
        outline: none;
        }

        .select {
            display: grid;
            grid-template-areas: "select";
            align-items: center;
            position: relative;

        select,
        &::after {
             grid-area: select;
         }

        min-width: 15ch;
        max-width: 30ch;
        border: 1px solid var(--select-border);
        border-radius: 0.25em;
        padding: 0.25em 0.5em;
        font-size: 1.25rem;
        cursor: pointer;
        line-height: 1.1;

        // Optional styles
        // remove for transparency
           background: linear-gradient(to bottom, #ffffff 0%, #e5e5e5 100%);

        // Custom arrow
  &::after {
               content: "";
               justify-self: end;
               width: 0.8em;
               height: 0.5em;
               background-color: var(--select-arrow);
               clip-path: polygon(100% 0%, 0 0%, 50% 100%);
           }
        }

        select[multiple] {
            padding-right: 0;
            height: 7rem;
        }

    </style>
</head>
<body>
<label for="multi-select">Multiple Select</label>
<div class="select select-multiple">
    <select id="multi-select" multiple>
        <option value="MIaM">Mouse In A Maze</option>
        <option value="PL">Private Life</option>
        <option value="SA">Suspended Animation</option>
        <option value="NQ">No Quarter</option>
        <option value="11:11">11:11 Ultimate Edition</option>
        <option value="UV">Ultraviolence</option>
        <option value="TC">The Core (with outro solo)</option>
        <option value="TK">Telekinetic Killer</option>
        <option value="ALL">All of the above</option>
        <option value="NONE">None of the above</option>
    </select>
    <span class="focus"></span>
</div>
</body>
</html>
