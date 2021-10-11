<?php
// Let's define the Elf class
// Elves should have higher dex
class Elf {
    // Let's define the starting stats
    const start_vit = 10;
    const start_att = 9;
    const start_def = 10;
    const start_dex = 10;
}
// Let's define the Dwarf class
// Dwarfes should have higher defence
class Dwarf {
    // Let's define the starting stats
    const start_vit = 10;
    const start_att = 8;
    const start_def = 11;
    const start_dex = 9;
}
// Let's define the Human class
// Humans should be a balanced class
class Human {
    // Let's define the starting stats
    const start_vit = 9;
    const start_att = 9;
    const start_def = 9;
    const start_dex = 9;
    const start_man = 9;
}
// Let's define the Orc class
// Orcs should be bulky, higher HP and Att, low Mana
class Orc {
    // Let's define the starting stats
    const start_vit = 12;
    const start_att = 10;
    const start_def = 8;
    const start_dex = 8;
    const start_man = 6;
}
?>