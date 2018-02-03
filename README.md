# DMsCheatSheet
Web app for tabletop RPG management

#Campign Organization
Organized in series of "cards"
(ID# for individual card and overarching campaign)

#Database Structure Ideas
Tables: Users, Characters, Creatures, Items, Classes, Races, Feats, Spells, [Campaign, CampCards, Rules, GenData]

Combo tables:
Character-has-Item
Character-has-Spell
Character-has-Feats
Character-has-Class(with level)
User-has-Notes


Users: id, username, password, user-level
Characters: race, attributes, platinum, gold, silver, copper, astral_diamonds, xp, description, background, image, languages, other
eegt
